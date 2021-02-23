<?php
include('seguro.class.php');
include('config.php');
if (isset($_POST['enviar'])) {
    $data = $_POST;
    $sitio->registrar($data);
}
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/colegio.ico">
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="align">
    <div class="login-wrap" style="margin-top: 29px;">
        <h2>Registrarse</h2>
        <div class="form">
            <form class="registration-form" method="POST" action="signin.php">
                <input type="text" placeholder="Nombre/s" name="nombre">
                <input type="text" placeholder="Apellidos" name="apellido">
                <select name="id_departamento">
                    <option >Departamento</option>
                    <?php
                        $departamento = $sitio->departamentos();
                        foreach ($departamento as $clave => $depto) {
                            echo "<option value='".$depto['id_departamento']."'>".$depto['descripcion'] ."</option>";
                        }
                    ?>
                </select>
                <select name="id_direccion">
                    <option >Direccion</option>
                    <?php
                        $direccion = $sitio->direccion();
                        foreach ($direccion as $clave => $dir) {
                            echo "<option value='".$dir['id_direccion']."'>".$dir['descripcion'] ."</option>";
                        }
                    ?>
                </select>
                <select name="id_rol">
                    <option >Puesto</option>
                    <?php
                        $rol = $sitio->roles();
                        foreach ($rol as $clave => $puesto) {
                            echo "<option value='".$puesto['id_rol']."'>".$puesto['rol'] ."</option>";
                        }
                    ?>
                </select>
                <input type="number" placeholder="No. Nómina" name="num_nomina">
                <select name="id_nomina">
                    <option >Tipo de Nómina</option>
                    <option value="1">Quincenal</option>
                    <option value="2">Catorcena</option>
                </select>
                <input type="password" placeholder="Contraseña" name="contrasena">
                <input type="submit" name="enviar" value="Guardar">
            </form>
        </div>
    </div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-d213e658-b319-c15b-32b6-3e798f1335ae" crossorigin=""></script>
</body>

</html>