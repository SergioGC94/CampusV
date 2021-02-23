<?php
    require_once('config2.php');
    $select = $conn->prepare("SELECT d.descripcion as descripcion,
            sum(case when p.tipo_conductor = 'Buen conductor' then 1 else 0 end) buenos,
            sum(case when p.tipo_conductor = 'Medio conductor' then 1 else 0 end) medios,
            sum(case when p.tipo_conductor = 'Mal conductor' then 1 else 0 end) malos
            from direccion d inner join persona p on d.id_direccion=p.id_direccion
            group by d.id_direccion");
    $select->execute();
    $data = array();
    while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    print json_encode($data);
?>