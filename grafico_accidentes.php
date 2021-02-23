<?php
    require_once('config2.php');
    $select = $conn->prepare("SELECT concat(nombre,' ', apellido) as nombreCompleto, accidentes_mes as accidentes from persona order by accidentes_mes DESC limit 10
    ");
    $select->execute();
    $data = array();
    while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    print json_encode($data);
?>