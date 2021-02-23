<?php
	session_start();
	include('config.php');
	
    class seguro{
        var $conn= null;
        
        function __construct(){
        
        }
		function conexion(){
			include 'config.php';
			$this->conn = new PDO($sgbd.':host='.$bdhost.';dbname='.$bdbase, $bdusuario);
		}

		function departamentos(){
			$this->conexion();
	        $sql = "SELECT * FROM departamento";
	        $sentencia = $this->conn->prepare($sql);
	        $sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_departamento"]]["id_departamento"]=$fila["id_departamento"];
				$datos[$fila["id_departamento"]]["descripcion"]=$fila["descripcion"];
				$i++;
	        }
	        return $datos;
		}

		function direccion(){
			$this->conexion();
	        $sql = "SELECT * FROM direccion";
	        $sentencia = $this->conn->prepare($sql);
	        $sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_direccion"]]["id_direccion"]=$fila["id_direccion"];
				$datos[$fila["id_direccion"]]["descripcion"]=$fila["descripcion"];
				$i++;
	        }
	        return $datos;
		}

		function roles(){
			$this->conexion();
	        $sql = "SELECT * FROM rol";
	        $sentencia = $this->conn->prepare($sql);
	        $sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_rol"]]["id_rol"]=$fila["id_rol"];
				$datos[$fila["id_rol"]]["rol"]=$fila["rol"];
				$i++;
	        }
	        return $datos;
		}
		
		function persona($id_usuario){
			$this->conexion();
			$sql = 'SELECT * FROM persona inner join usuario USING (id_usuario) inner JOIN direccion USING(id_direccion) WHERE id_usuario = :id_usuario';
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':id_usuario', $id_usuario);
			$sentencia->execute();
			return $sentencia->fetch();
		}

		function log_in($num_nomina, $id_nomina, $contrasena){
			$this->conexion();
			$contrasena = md5($contrasena);
			$sql = 'SELECT usuario.num_nomina, usuario.id_nomina, contrasena, id_persona, usuario.id_usuario, id_direccion FROM usuario
				INNER JOIN persona ON persona.id_usuario = usuario.id_usuario where usuario.num_nomina = :num_nomina 
				AND usuario.id_nomina = :id_nomina AND contrasena = :contrasena';
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':num_nomina', $num_nomina);
			$sentencia->bindParam(':id_nomina', $id_nomina);
			$sentencia->bindParam(':contrasena', $contrasena);
			$sentencia->execute();
			$fila = $sentencia->fetch(PDO::FETCH_ASSOC);
			if (isset($fila['num_nomina']) and isset($fila['id_nomina'])) {
				$_SESSION = $fila;
				$_SESSION['validado'] = true;
				$_SESSION['roles'] = $this->rol($fila['usuario.id_usuario']);
				header('Location: index_campus.php');
			}else{
				$this->log_out();
				header('Location: logout.php');
			}
		}

		function rol($id_usuario){
			$this->conexion();
			$sql = 'SELECT rol, id_rol FROM usuario_rol INNER JOIN rol using(id_rol) where id_usuario = :id_usuario';
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':id_usuario', $id_usuario);
			$sentencia->execute();
			$i = 0;
			$roles = array();
			while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC)) {
				$roles[$i]['rol'] = $fila['rol'];
				$roles[$i]['id_rol'] = $fila['id_rol'];
				$i++;
			}
			return $roles;
		}

		function log_out(){
			session_destroy();
			unset($_SESSION);
			$_SESSION['validado'] = false;
		}

		function registrar($data){
			$this->conexion($data);
			$this->conn->beginTransaction();
			try{
				$sql = 'INSERT INTO usuario(num_nomina, id_nomina, contrasena) VALUES (:num_nomina, :id_nomina, :contrasena)';
				$sentencia = $this->conn->prepare($sql);
				$sentencia->bindParam(':num_nomina', $data['num_nomina']);
				$sentencia->bindParam(':id_nomina', $data['id_nomina']);

				$data['contrasena'] = md5($data['contrasena']);
				$sentencia->bindParam(':contrasena', $data['contrasena']);
				$sentencia->execute();

				$sql = 'SELECT * FROM usuario WHERE num_nomina = :num_nomina and id_nomina = :id_nomina';
				$sentencia = $this->conn->prepare($sql);
				$sentencia->bindParam(':num_nomina', $data['num_nomina']);
				$sentencia->bindParam(':id_nomina', $data['id_nomina']);
				$sentencia->execute();
				$fila = $sentencia->fetch();
				
				$sql = 'INSERT INTO persona( nombre, apellido, id_usuario, id_nomina, id_departamento, id_direccion) 
					VALUES (:nombre, :apellido, :id_usuario, :id_nomina, :id_departamento, :id_direccion)';
				$sentencia = $this->conn->prepare($sql);
				$sentencia->bindValue(':nombre', $data['nombre']);
				$sentencia->bindValue(':apellido', $data['apellido']);
				$sentencia->bindValue(':id_usuario', $fila['id_usuario']);
				$sentencia->bindValue(':id_nomina', $data['id_nomina']);
				$sentencia->bindValue(':id_departamento', $data[':id_departamento']);
				$sentencia->bindValue(':id_direccion', $data['id_direccion']);
				$sentencia->execute();

                $rol = $data['id_rol'];
                $sql = 'INSERT INTO usuario_rol(id_rol, id_usuario) VALUES (:id_rol, :id_usuario)';
                $sentencia = $this->conn->prepare($sql);
                $sentencia->bindValue(':id_rol', $rol);
                $sentencia->bindValue(':id_usuario', $fila['id_usuario']);
                $sentencia->execute();

				$this->conn->commit();
				header('Location: login.php');
			}catch(Exception $e){
				$this->conn->rollBack();
				header('Location: signin.php');
			}
		}

		function validar_rol($roles_permitidos){
			$roles_usuario = $_SESSION['roles'];
			$rol_valido = false;
			foreach ($roles_usuario as $rol) {
				if (in_array($rol['rol'], $roles_permitidos)) {
					$rol_valido = true;
				}
			}
			if (!$rol_valido) {
				header('Location: logout.php');
			}
		}

		function listarExamenRealizado($id_persona){
			$this->conexion();
	        $sql = "SELECT id_persona, examen.id_examen, examen, fecha FROM persona_examen inner join examen on persona_examen.id_examen = examen.id_examen 
				WHERE id_persona = :id_persona";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':id_persona', $id_persona);
	        $sentencia->execute();
			$i = 0;
			$datos = array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_examen"]]["examen"] = $fila["examen"];
				$datos[$fila["id_examen"]]["fecha"] = $fila["fecha"];
				$i++;
			}
	        return $datos;
		}

		//Registro de examen de nutricion
		function examen_nutricion($data){
			$this->conexion();
			$this->conn->beginTransaction();
            try{
                $sql = 'INSERT INTO persona_examen(id_persona, id_examen, fecha) VALUES (:id_persona, 2, NOW())';
                $sentencia = $this->conn->prepare($sql);
				$sentencia->bindParam(':id_persona', $data['id_persona']);
                $sentencia->execute();

                $sql = 'INSERT INTO examen_nutricion(id_persona, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15) 
					VALUES (:id_persona, :p1, :p2, :p3, :p4, :p5, :p6, :p7, :p8, :p9, :p10, :p11, :p12, :p13, :p14, :p15)';
                $sentencia = $this->conn->prepare($sql);
				$sentencia->bindParam(':id_persona', $data['id_persona']);
				$sentencia->bindParam(':p1', $data['p1']);
				$sentencia->bindParam(':p2', $data['p2']);
				$sentencia->bindParam(':p3', $data['p3']);
				$sentencia->bindParam(':p4', $data['p4']);
				$sentencia->bindParam(':p5', $data['p5']);
				$sentencia->bindParam(':p6', $data['p6']);
				$sentencia->bindParam(':p7', $data['p7']);
				$sentencia->bindParam(':p8', $data['p8']);
				$sentencia->bindParam(':p9', $data['p9']);
				$sentencia->bindParam(':p10', $data['p10']);
				$sentencia->bindParam(':p11', $data['p11']);
				$sentencia->bindParam(':p12', $data['p12']);
				$sentencia->bindParam(':p13', $data['p13']);
				$sentencia->bindParam(':p14', $data['p14']);
				$sentencia->bindParam(':p15', $data['p15']);
                $sentencia->execute();
				
				$this->conn->commit();
                header('Location: fin_examen_nutricion.php');
            }catch(Exception $e){
                $this->conn->rollBack();
                header('Location: examen_nutricion.php');
            }
		}

		//Progreso de Campus Virtual
		function progreso($id_usuario){
			$this->conexion();
	        $sql = 'SELECT sum(examen.valor) as avance FROM persona inner join usuario USING (id_usuario) 
				inner JOIN persona_examen USING(id_persona) inner join examen USING(id_examen) 
				WHERE id_usuario = :id_usuario';
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':id_usuario', $id_usuario);
			$sentencia->execute();
			return $sentencia->fetch();
		}

		        
        function numero_empleados(){
            $this->conexion();
			$sql= 'SELECT count(id_persona) as numero from persona';
			$sentencia = $this->conn->prepare($sql);
            $sentencia->execute();
            $fila = $sentencia->fetch(PDO::FETCH_ASSOC);
            $conteo = $fila['numero'];  
            return $conteo; 
        }

        function campus_terminado($id_direccion){
            $this->conexion();
			$sql= 'SELECT count(id_persona) as numero from persona where tipo_conductor = "Buen Conductor"';
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':id_direccion', $id_direccion);
            $sentencia->execute();
            $fila = $sentencia->fetch(PDO::FETCH_ASSOC);
            $conteo = ($fila['numero']*100)/$this->numero_empleados();  
            return $conteo;
        }

        function medio_conductor(){
            $this->conexion();
			$sql= 'SELECT count(id_persona) as numero from persona where tipo_conductor = "Medio Conductor"';
			$sentencia = $this->conn->prepare($sql);
            $sentencia->execute();
            $fila = $sentencia->fetch(PDO::FETCH_ASSOC);
            $conteo = ($fila['numero']*100)/$this->numero_empleados();    
            return $conteo;
        }

        function mal_conductor(){
            $this->conexion();
			$sql= 'SELECT count(id_persona) as numero from persona where tipo_conductor = "Mal Conductor"';
			$sentencia = $this->conn->prepare($sql);
            $sentencia->execute();
            $fila = $sentencia->fetch(PDO::FETCH_ASSOC);
            $conteo = ($fila['numero']*100)/$this->numero_empleados();  
            return $conteo;
        }

        function listarConductores(){
            $this->conexion();
	        $sql = "SELECT id_persona, nombre, apellido, tipo_conductor, departamento.descripcion from persona 
				inner join departamento on persona.id_departamento = departamento.id_departamento where tipo_conductor != 'Buen conductor'";
	        $sentencia = $this->conn->prepare($sql);
	        $sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_persona"]]["nombre"]=$fila["nombre"];
				$datos[$fila["id_persona"]]["apellido"]=$fila["apellido"];
				$datos[$fila["id_persona"]]["tipo_conductor"]=$fila["tipo_conductor"];
				$datos[$fila["id_persona"]]["descripcion"]=$fila["descripcion"];
	            $i++;
	        }
	        return $datos;
        }

        function listarAccidentes(){
            $this->conexion();
	        $sql = 'SELECT id_persona, nombre, apellido, fuma, toma, tipo_conductor, departamento.descripcion from persona 
				inner join departamento on persona.id_departamento = departamento.id_departamento';
	        $sentencia = $this->conn->prepare($sql);
	        $sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_persona"]]["nombre"]=$fila["nombre"];
				$datos[$fila["id_persona"]]["apellido"]=$fila["apellido"];
				$datos[$fila["id_persona"]]["fuma"]=$fila["fuma"];
				$datos[$fila["id_persona"]]["toma"]=$fila["toma"];
				$datos[$fila["id_persona"]]["tipo_conductor"]=$fila["tipo_conductor"];
				$datos[$fila["id_persona"]]["descripcion"]=$fila["descripcion"];
	            $i++;
	        }
	        return $datos;
		}
		
		//Listar examenes
		function examenes(){
			$this->conexion();
			$sql = "SELECT * FROM examen";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_examen"]]["id_examen"]=$fila["id_examen"];
				$datos[$fila["id_examen"]]["examen"]=$fila["examen"];
				$i++;
	        }
	        return $datos;
		}

	//Codigo para listar personas que no han hecho algun examen
		//Psicometrico = 1
        function listarPsicometrico($id_direccion){
            $this->conexion();
	        $sql = "SELECT * FROM persona WHERE id_persona NOT IN (SELECT id_persona FROM persona_examen where id_examen = 1) 
				and id_direccion = :id_direccion";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':id_direccion', $id_direccion);
	        $sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_persona"]]["nombre"]=$fila["nombre"];
				$datos[$fila["id_persona"]]["apellido"]=$fila["apellido"];
				$datos[$fila["id_persona"]]["telefono"]=$fila["telefono"];
				$i++;
	        }
	        return $datos;
        }

		//Nutrición = 2
        function listarNutricion($id_direccion){
            $this->conexion();
	        $sql = "SELECT * FROM persona WHERE id_persona NOT IN (SELECT id_persona FROM persona_examen where id_examen = 2) 
				and id_direccion = :id_direccion";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->bindParam(':id_direccion', $id_direccion);
	        $sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_persona"]]["nombre"]=$fila["nombre"];
				$datos[$fila["id_persona"]]["apellido"]=$fila["apellido"];
				$i++;
	        }
	        return $datos;
		}

		function citasDisponibles(){
			$this->conexion();
			$sql = "SET lc_time_names = 'es_ES'";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->execute();

			$sql = "SELECT id_cita, Date_format(fecha, '%d de %M') AS fecha, concat(time_format(hora_inicial, '%H:%i'), ' - ' , 
				time_format(hora_final, '%H:%i')) AS horario, concat(persona.nombre, ' ', persona.apellido) AS nutriologo FROM citas 
				INNER JOIN persona on citas.id_persona = persona.id_persona INNER JOIN usuario on usuario.id_usuario = 
				persona.id_usuario INNER JOIN usuario_rol on usuario_rol.id_usuario = usuario.id_usuario INNER JOIN rol on 
				usuario_rol.id_rol = rol.id_rol WHERE id_cita NOT IN (SELECT id_cita FROM citas_agendadas) AND rol.id_rol = 4 
				ORDER BY Date_format(fecha, '%d de %M')";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->execute();
			$i=0;
			$datos=array();
	        while ($fila = $sentencia->fetch()) {
				$datos[$fila["id_cita"]]["fecha"]=$fila["fecha"];
				$datos[$fila["id_cita"]]["horario"]=$fila["horario"];
				$datos[$fila["id_cita"]]["nutriologo"]=$fila["nutriologo"];
				$i++;
	        }
	        return $datos;
		}
    }
    $sitio= new seguro;
