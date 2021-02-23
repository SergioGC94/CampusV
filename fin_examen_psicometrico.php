<?php
include('seguro.class.php');
include('config.php');
//$sitio->validar_rol(array('Usuario','Administrador'));
$id_persona = $_SESSION['id_persona'];

if (isset($_POST['guardar_examen'])) {
    $data = $_POST;
    $data['id_persona'] = $id_persona;
    //$sitio->examen_nutricion($data);
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
    <link rel="stylesheet" href="css/tablas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
    <title>Campus Virtual | Test Psicometrico</title>
    <link rel="shortcut icon" href="img/colegio.ico">
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
                                    <a class="dropdown-item" href="index_campus.php"><img src="img/inicio.png" alt="home"> Página Principal</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-white bg-success border-dark mb-3" style="max-width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4" align="center">
                            <img src="img/meta.gif" alt="meta">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">¡Felicidades!</h5>
                                <p class="card-text" align="justify">Te damos las más grandes felicitaciones por haber terminado este test.
                                    Este es sólo un pequeño paso para finalizar tu recorrido en este campus virtual.
                                    Te esperan muchos más retos que cumplir.
                                    ¡Bien hecho!</p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <hr class="my-4">
        <div class="row text-light" id="pie" style="background-color: #241284;">
			<div class="col-sm-12" align="center">
				<h4 class="text-light">Coordinación de Seguros</h4>
				<ul class="list-unstyled ">
					<li class="text-light">Gestión de Seguridad Vial</li>
				</ul>
			</div>
		</div>
    </div>
</body>

</html>