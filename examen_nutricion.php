<?php
    include('seguro.class.php');
    include('config.php');
    //$sitio->validar_rol(array('Usuario','Administrador'));
    $id_persona = 1;
    
    if (isset($_POST['guardar_examen'])) {
        $data = $_POST;
        $data['id_persona'] = $id_persona;
        $sitio->examen_nutricion($data);
        die();
    }

?>
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap2.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
    <title>Campus Virtual | Test de Hábitos Alimenticios</title>
    <link rel="shortcut icon" href="img/colegio.ico">

    <style>
        body  {
            background-image: url("img/fruits.png");
            background-repeat: no-repeat;
            background-position: center;

        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="barra" style="background-color: #302580;">
                    <div class="container">
						<a class="navbar-brand" href="#">
						<img src="img/celaya.png" alt="" width="35" height="40">
						</a>
					</div>
                    <div class="collapse navbar-collapse" id="navbarColor01" style="margin-right: 90px;">
                        <ul class="navbar-nav ml-auto" style="font-size: 17px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="index_campus.php"><img src="img/home.png" alt="inicio"> Página Principal</a>
									<a class="dropdown-item" href="#modalSalir" class="trigger-btn btn btn-primary" data-toggle="modal"><img src="img/logout.png" alt="logout"> Cerrar Sesión</a>
								</div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        </br>
        <div class="row" align="center">
            <h2><img src="img/nutricion.png" alt="examen" width="50" height="50"> Test de Hábitos Alimenticios</h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-success">
					<div class="card-header bg-success text-light">
						Indicaciones
					</div>
					<div class="card-body">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <p style="text-align: justify;">
                            La salud y bienestar siempre han sido muy importantes para el desempeño en el ámbito laboral. 
                            Con este test, puedes saber si tus hábitos alimenticios son correctos y además recibirás sugerencias 
                            para mejorarlos.
                            </p>
                        </div>
                        <hr class="my-2">
						<form method="POST" action="examen_nutricion.php" enctype="multipart/form-data">
							<div class="form-group">
								<label>1. Seleccione su sexo</label>
								<input type="text" class="form-control" placeholder="Masculino / Femenino" name="p1">
							</div>
							<div class="form-group">
								<label>2. ¿Cúal es su peso actualmente? </label>
								<input type="text" class="form-control" placeholder="Kg" name="p2">
                            </div>
                            <div class="form-group">
								<label>3. ¿Cúal es su talla?</label>
								<input type="text" class="form-control" placeholder="M" name="p3">
                            </div>
                            <div class="form-group">
								<label>4. ¿Cuántos días a la semana consume ceréales?</label>
								<input type="number" class="form-control" name="p4">
                            </div>
                            <div class="form-group">
								<label>5. ¿Cuántos días a la semana consume frutas?</label>
								<input type="number" class="form-control" name="p5">
                            </div>
                            <div class="form-group">
								<label>6. ¿Cuántos días a la semana consume verduras?</label>
								<input type="number" class="form-control" name="p6">
                            </div>
                            <div class="form-group">
								<label>7. ¿Cuántos días a la semana consume legumbres?</label>
								<input type="number" class="form-control" name="p7">
                            </div>
                            <div class="form-group">
								<label>8. ¿Cuántos días a la semana consume carnes rojas?</label>
								<input type="number" class="form-control" name="p8">
                            </div>
                            <div class="form-group">
								<label>9. ¿Cuántos días a la semana consume carnes blancas?</label>
								<input type="number" class="form-control" name="p9">
                            </div>
                            <div class="form-group">
								<label>10. ¿Cuántos días a la semana consume grasas?</label>
								<input type="number" class="form-control" name="p10">
                            </div>
                            <div class="form-group">
								<label>11. ¿Cuántos días a la semana consume lácteos?</label>
								<input type="number" class="form-control" name="p11">
                            </div>
                            <div class="form-group">
								<label>12. ¿Cuántos días a la semana consume azucares?</label>
								<input type="number" class="form-control" name="p12">
                            </div>
                            <div class="form-group">
								<label>13. ¿Cuántos días a la semana consume alimentos de pastelería y bollería?</label>
								<input type="number" class="form-control" name="p13">
                            </div>
                            <div class="form-group">
								<label>14. ¿Cuántas horas al día realiza ejercicio?</label>
								<input type="number" class="form-control" name="p14">
                            </div>
                            <div class="form-group">
								<label>15. ¿Cuántos litros de agua consume al día?</label>
								<input type="number" class="form-control" name="p15">
							</div>
							<input type="submit" name="guardar_examen" value="Finalizar" class="btn btn-primary btn-lg btn-block"/>
						</form>
					</div>
				</div>
				<hr class="my-4">
            </div>
        </div>
        <div class="row text-light" id="pie" style="background-color: #241284;">
			<div class="col-sm-12" align="center">
				<h4 class="text-light">Coordinación de Seguros</h4>
				<ul class="list-unstyled ">
					<li class="text-light">Gestión de Seguridad Vial</li>
				</ul>
			</div>
		</div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="modalSalir" tabindex="-1" role="dialog" aria-labelledby="modalSalir" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSalir">Cerrar Sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            <div class="modal-body">¿Estas seguro de finalizar la sesión?</div>
            <div class="modal-footer">
                <button class="btn btn-info" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>