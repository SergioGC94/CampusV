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
    <link rel="shortcut icon" href="img/colegio.ico">
    <title>Campus Virtual | Test Psicometrico - Bloque 2</title>
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
                </nav>
            </div>
        </div>
        </br>
        <div class="row">
        <div class="col-sm-12" align="center">
                <h2><img src="img/psico.png" alt="examen" width="50" height="50"> Test Psicométrico - Bloque 2</h2>
                <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="col-sm-12">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    1. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb1.PNG" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    2. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb2.PNG" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    3. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb3.PNG" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    4. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb4.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    5. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb5.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    6. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb6.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    7. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb7.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    8. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb8.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    9. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb9.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    10. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb10.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    11. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb11.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    12. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb12.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    13. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb13.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    14. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb14.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    15. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb15.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    16. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb16.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    17. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb17.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    18. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb18.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    19. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb19.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    20. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb20.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    21. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb21.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    22. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb22.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    23. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb23.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    24. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb24.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    25. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb25.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    26. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb26.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    27. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb27.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    28. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb28.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    29. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb29.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    30. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb30.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    31. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb31.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    32. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb32.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    33. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb33.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    34. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb34.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    35. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb35.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="img/b1.png" alt="MDN">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF ;">
                                    36. 
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                        <label class="form-check-label" for="respuesta1">A. </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                        <label class="form-check-label" for="respuesta2">B. </label>
                                    </div> 
                                    <div class="text-center">
                                        <img src="img/bb36.png" alt="MDN" width="278" height="278">
                                    </div>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a type="submit" class="btn btn-primary mb-3" href="examen_psico_inst_3.php">Siguiente Bloque</a>
                    </div>
                </form>
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

    <!-- Imagen Modal-->
    <div id="modalImagen" class="modal fade">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Imagen</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body text-center">
                    <img src="img/b1.png" alt="MDN">
				</div>
			</div>
		</div>
	</div>
    <script src="js/tiempo_bloq_2.js"></script>
    <script>
        $(":radio").click(function(){
            var radioName = $(this).attr("name"); //Get radio name
            $(":radio[name='"+radioName+"']").attr("disabled", true); //Disable all with the same name
        });
    </script>
</body>

</html>