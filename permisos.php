<?php
    include('seguro.class.php');
    include('config.php');
    if($sitio->validar_rol(array('Enlace','Administrador')) == true){
        header('Location: index_campus.php');
    }
    if($sitio->validar_rol(array('Nutrióloga')) == true){
        header('Location: jaja.php');
    }
    if($sitio->validar_rol(array('Usuario')) == true){
        header('Location: index_usuario.php');
    }
?>