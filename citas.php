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
    <title>Campus Virtual | Citas</title>
    <link rel="shortcut icon" href="img/colegio.ico">
    <style>
        #recomendacion {
            background-image: url("img/R1.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        #boton {
            padding: 20px 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" id="top">
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
                                    <a class="dropdown-item" href="#"><img src="img/home.png" alt="inicio"> Inicio</a>
                                    <a class="dropdown-item" href="#modalSalir" class="trigger-btn btn btn-primary" data-toggle="modal"><img src="img/logout.png" alt="logout"> Cerrar Sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        </br>
        <div class="row" align="center" style="background-color: #FFFFFF;">
            <h2><img src="img/cita.png" alt="examen" width="50" height="50"> Citas</h2>
            <br>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-success">
                    <div class="card-header text-light" style="background-color: #0E6655;">
                        Agregar nueva cita
                    </div>
                    <div class="card-body">
                        <form method="POST" action="citas.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Fecha</label>
                                    <input type="date" class="form-control" name="fecha">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Hora de Inicio</label>
                                    <input type="text" class="form-control" placeholder="HH:MM" name="hora_inicio">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Hora de Termino</label>
                                    <input type="text" class="form-control" placeholder="HH:MM" name="hora_fin">
                                </div>
                                <div class="form-group col-md-3">
                                    <input id="boton" type="submit" name="guardar_cita" value="Guardar" class="btn btn-primary btn-block" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr class="my-3">
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