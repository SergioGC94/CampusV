<?php
include('seguro.class.php');
include('config.php');
//$sitio->validar_rol(array('Usuario','Administrador'));
$id_usuario = 1;
$id_persona = 1;
$data = $sitio->persona($id_usuario);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
    
    <script src="js/accidentes.js"></script>
    <script src="js/accidentes_deconomico.js"></script>

    <title>Campus Virtual</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="barra" style="background-color: #302580;">
                    <div class="collapse navbar-collapse" id="navbarColor01" style="margin-right: 90px;">
                        <ul class="navbar-nav ml-auto" style="font-size: 17px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opciones
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="index_campus.php">Campus Virtual</a>
                                    <a class="dropdown-item" href="#modalSalir" class="trigger-btn btn btn-primary" data-toggle="modal">Salir</a>
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
                <h2>Estadisticas sobre accidentes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" id="registro">
                    <div class="card-header">
                        Agregar registro
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label>A continuación, se muestra un pequeño formulario para agregar un nuevo registro sobre la cantidad de 
                                accidentes sucitados durante el mes previo en su respectiva dirección. 
                            </label>
                            <form method="POST" action="accidentes.php" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Cantidad de accidentes en el mes previo</label>
                                        <input type="number" class="form-control" placeholder="Accidentes" name="cantidad">
                                    </div>
                                </div>
                                <input type="submit" name="nuevo_registro" value="Agregar" class="btn btn-primary btn-lg btn-block"/>
                            </form>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
            </div>
        </div> 
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Grafico Anual de Accidentes
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label>En el siguiente grafico se puede observar la cantidad de accidentes por mes en su respectiva 
                                dirección.                            
                            </label>
                            <canvas id="graficoAnual"></canvas>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Top 10 de empleados con más accidentes
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <canvas id="accidentes"></canvas>
                        </div>
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
                    <a class="btn btn-primary" href="index.html">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
</body>

</html>