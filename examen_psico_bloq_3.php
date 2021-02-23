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
    <title>Campus Virtual | Test Psicometrico - Bloque 3</title>
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
                <h2><img src="img/psico.png" alt="examen" width="50" height="50"> Test Psicométrico - Bloque 3</h2>
                <hr class="my-4">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form class="col-sm-12">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    1.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-1.png" alt="bloque3-1" width="260" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    2.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-2.png" alt="bloque3-1" width="260" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    3.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-3.png" alt="bloque3-1" width="260" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    4.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-4.png" alt="bloque3-1" width="260" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    5.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-5.png" alt="bloque3-5" width="260" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    6.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-4 col-md-6 mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-md-6 mb-8" text-align="center">
                                            <img src="img/b3-6.png" alt="bloque3-6" width="260" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    7.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-7.png" alt="bloque3-7" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    8.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-8.png" alt="bloque3-8" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    9.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-9.png" alt="bloque3-1" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    10.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-10.png" alt="bloque3-10" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    11.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-11.png" alt="bloque3-1" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    12.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-12.png" alt="bloque3-12" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    12.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-12.png" alt="bloque3-12" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    14.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-14.png" alt="bloque3-1" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    15.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-15.png" alt="bloque3-1" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    16.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-16.png" alt="bloque3-1" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    17.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-17.png" alt="bloque3-5" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    18.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-18.png" alt="bloque3-6" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    19.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-19.png" alt="bloque3-7" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    20.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-20.png" alt="bloque3-8" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    21.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-21.png" alt="bloque3-1" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    22.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-22.png" alt="bloque3-10" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    23.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-23.png" alt="bloque3-1" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header text-white " style="background-color: #95B5AF;">
                                    24.
                                </div>
                                <div class="card-body">
                                    <div class="row col-xl-12 col-md-6 mb-12">
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta1" value="option1">
                                                <label class="form-check-label" for="respuesta1">A. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta2" value="option2">
                                                <label class="form-check-label" for="respuesta2">B. </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta3" value="option3">
                                                <label class="form-check-label" for="respuesta3">C.</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pregunta1" id="respuesta4" value="option4">
                                                <label class="form-check-label" for="respuesta4">D. </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 mb-6">
                                            <img src="img/b3-24.png" alt="bloque3-12" width="230" height="230">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a type="submit" class="btn btn-primary mb-3" href="examen_psico_inst_4.php">Siguiente bloque</a>
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
    <script src="js/tiempo_bloq_3.js"></script>
    <script>
        $(":radio").click(function() {
            var radioName = $(this).attr("name"); //Get radio name
            $(":radio[name='" + radioName + "']").attr("disabled", true); //Disable all with the same name
        });
    </script>
</body>

</html>