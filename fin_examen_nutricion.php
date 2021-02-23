<?php
include('seguro.class.php');
include('config.php');
//$sitio->validar_rol(array('Usuario','Administrador'));
$id_persona = $_SESSION['id_persona'];

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
    <link rel="stylesheet" href="css/tablas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
    <title>Campus Virtual | Test de Hábitos Alimenticios</title>
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
                <hr class="my-4">
            </div>
        </div>
        <div class="row" align="center">
            <h3><img src="img/opciones.png" alt="opciones"> Más Opciones</h3>
            </br>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card border-dark mb-3">
                            <div class="row g-0">
                                <div class="col-md-4" align="center">
                                    <img src="img/dieta.png" alt="rec" width="200" alt="200">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Recomendaciones</h5>
                                        <p class="card-text" align="justify">Si deseas saber como mejorar tus hábitos alimenticios,
                                            haz click en el botón de abajo para conocer algunas recomendaciones.</p>
                                        <a class="btn btn-primary btn-lg btn-block" href="recomendaciones.html">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-dark mb-3">
                            <div class="row g-0">
                                <div class="col-md-4" align="center">
                                    <img src="img/cita.png" alt="cita" width="200" height="200">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Agendar Cita</h5>
                                        <p class="card-text" align="justify">Si deseas un asesoramiento con nuestro nutriologo, haz click
                                            en el botón de abajo para agendar una cita.</p>
                                        <a class="btn btn-primary btn-lg btn-block" href="#modalCitas" data-toggle="modal">Agendar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-dark mb-3">
                            <div class="row g-0">
                                <div class="col-md-4" align="center">
                                    <img src="img/medico.png" alt="cita" width="200" height="200">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Consulta Rápida</h5>
                                        <p class="card-text" align="justify">
                                            Calcula las calorías, proteínas, carbohidratos y grasas de acuerdo a tu información y 
                                            objetivo específico. 
                                        </p>
                                        <a class="btn btn-primary btn-lg btn-block" href="consultas.php" data-toggle="modal">Consultar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-3">
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

    <div id="modalCitas" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agendar Cita</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="img/cerrar.png" alt="cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 mb-12">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-fill" id="dataTable" width="100%" cellspacing="0">
                                        <?php
                                        $citas = $sitio->citasDisponibles();
                                        $i = 1;
                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th align='center'>#</th>";
                                        echo "<th align='center'>Dia/Mes</th>";
                                        echo "<th align='center'>Horario</th>";
                                        echo "<th align='center'>Nutriólogo/a</th>";
                                        echo "<th align='center'> - </th>";
                                        echo "</tr>";
                                        echo "</thead>";
                                        foreach ($citas as $clave => $citasDisp) {
                                            echo "<tbody class='table-hover'>";
                                            echo "<tr>";
                                            echo "<td align='center'>" . $i++ . "</td>";
                                            echo "<td align='center'>" . $citasDisp['fecha'] . "</td>";
                                            echo "<td align='center'>" . $citasDisp['horario'] . "</td>";
                                            echo "<td align='center'>" . $citasDisp['nutriologo'] . "</td>";
                                            echo "<td><a class='btn btn-info' href='agendar_cita.php?id_cita=$clave&id_persona=$id_persona'>
                                                <img src='img/lapiz.png' alt='agendar'/>  Agendar</td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>