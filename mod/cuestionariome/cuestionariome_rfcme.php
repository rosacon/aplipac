 <?php

    require_once('lib/config.php');
    require_once('lib/funciones.php');

    if (isset($_SESSION['uid'])) {

        $sql = "delete from Pac_cme where usu_cc=" . $_SESSION['uid'];
        $result = execute_sql($sql);

        $rta1 = get_param('rta1');
        $rta2 = get_param('rta2');
        $rta3 = get_param('rta3');
        $rta4 = get_param('rta4');
        $rta5 = get_param('rta5');
        $rta6 = get_param('rta6');
        $rta7 = get_param('rta7');
        $rta8 = get_param('rta8');
        $rta9 = get_param('intensidadc');
        $rta10 = get_param('intensidadh');
        $rta11 = get_param('intensidadco');
        $rta12 = get_param('intensidadm');
        $rta13 = get_param('intensidadd');
        $rta32 = get_param('pie');
        $rta33 = get_param('medio');
        $rta34 = get_param('cucli');
        $rta35 = get_param('flexionandot');
        $rta36 = get_param('girandot');
        $rta37 = get_param('inclinandoadelante');
        $rta38 = get_param('sentado');
        $rta39 = get_param('caminando');
        $rta40 = get_param('rta40');
        $rta41 = get_param('rta41');
        $rta42 = get_param('rta42');
        $rta43 = get_param('rta43');


        $usu_cc = $_SESSION['uid'];


        $sql = "insert into Pac_cme values (";
        $sql .= "null,";
        $sql .= "" . $usu_cc . ",";
        $sql .= "'" . $rta1 . "',";
        $sql .= "'" . $rta2 . "',";
        $sql .= "'" . $rta3 . "',";
        $sql .= "'" . $rta4 . "',";
        $sql .= "'" . $rta5 . "',";
        $sql .= "'" . $rta6 . "',";
        $sql .= "'" . $rta7 . "',";
        $sql .= "'" . $rta8 . "',";
        $sql .= "'" . $rta9 . "',";
        $sql .= "'" . $rta10 . "',";
        $sql .= "'" . $rta11 . "',";
        $sql .= "'" . $rta12 . "',";
        $sql .= "'" . $rta13 . "',";
        $sql .=  "'" . $rta32 . "',";
        $sql .=  "'" . $rta33 . "',";
        $sql .= "'" . $rta34 . "',";
        $sql .= "'" . $rta35 . "',";
        $sql .= "'" . $rta36 . "',";
        $sql .= "'" . $rta37 . "',";
        $sql .= "'" . $rta38 . "',";
        $sql .= "'" . $rta39 . "',";
        $sql .= "'" . $rta40 . "',";
        $sql .= "'" . $rta41 . "',";
        $sql .=  "'" . $rta42 . "',";
        $sql .= "'" . $rta43 . "')";
        $rs = execute_sql($sql);
    }

    echo "<h1>" . "APLIPAC TE RECOMIENDA:" . "</h1>";

    if ($rta1 == "si") {
        $registro = "select * from Pac_actividades where act_id=1";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br>";
    }

    if ($rta2 == "si") {
        $registro = "select * from Pac_actividades where act_id=4";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br>";
    }

    if ($rta3 == "hombro derecho") {
        $registro = "select * from Pac_actividades where act_id=3";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br>";
    }

    if ($rta3 == "hombro izquierdo") {
        $registro1 = "select * from Pac_actividades where act_id=33";
        $result1 = execute_sql($registro1);
        $reg1 = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br>";
    }

    if ($rta3 == "ambos hombros") {
        $registro1 = "select * from Pac_actividades where act_id=333";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta4 == "hombro derecho") {
        $registro = "select * from Pac_actividades where act_id=33";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta4 == "hombro izquierdo") {
        $registro1 = "select * from Pac_actividades where act_id=333";
        $result1 = execute_sql($registro1);
        $reg1 = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta4 == "ambos hombros") {
        $registro1 = "select * from Pac_actividades where act_id=3";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta5 == "codo derecho") {
        $registro = "select * from Pac_actividades where act_id=7";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta5 == "codo izquierdo") {
        $registro = "select * from Pac_actividades where act_id=77";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta5 == "ambos codos") {
        $registro = "select * from Pac_actividades where act_id=777";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta6 == "codo derecho") {
        $registro = "select * from Pac_actividades where act_id=777";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta6 == "codo izquierdo") {
        $registro = "select * from Pac_actividades where act_id=7";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta6 == "ambos codos") {
        $registro = "select * from Pac_actividades where act_id=77";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta7 == "ambas muñecas") {
        $registro = "select * from Pac_actividades where act_id=8";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta7 == "muñeca  izquierda") {
        $registro = "select * from Pac_actividades where act_id=21";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta7 == "muñeca  derecha") {
        $registro = "select * from Pac_actividades where act_id=9";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta7 == "ambas manos") {
        $registro = "select * from Pac_actividades where act_id=10";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta7 == "mano izquierda") {
        $registro = "select * from Pac_actividades where act_id=11";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta8 == "ambas muñecas") {
        $registro = "select * from Pac_actividades where act_id=11";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta8 == "muñeca  izquierda") {
        $registro = "select * from Pac_actividades where act_id=10";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta8 == "muñeca  derecha") {
        $registro = "select * from Pac_actividades where act_id=9";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta8 == "ambas manos") {
        $registro = "select * from Pac_actividades where act_id=21";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta8 == "mano izquierda") {
        $registro = "select * from Pac_actividades where act_id=8";
        $result1 = execute_sql($registro);
        $reg = get_result_array($result1);
        echo $reg['act_contenido'] . "<br><br><br><br><br><br><br><br>";
    }

    if ($rta32 > 0 and  $rta32 < 101) {
        $registro2 = "select * from Pac_actividades where act_id=24";
        $registro3 = "select * from Pac_actividades where act_id=15";
        $registro4 = "select * from Pac_actividades where act_id=30";
        $result2 = execute_sql($registro2);
        $result3 = execute_sql($registro3);
        $result4 = execute_sql($registro4);
        $reg2 = get_result_array($result2);
        $reg3 = get_result_array($result3);
        $reg4 = get_result_array($result4);
        echo $reg2['act_contenido'] . "<br><br><br><br><br><br>";
        echo $reg3['act_contenido'] . "<br><br><br><br><br><br>";
        echo $reg4['act_contenido'] . "<br><br>";
    }

    ?>




	





















 


 



