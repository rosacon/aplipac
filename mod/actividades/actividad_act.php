<?php

require_once('lib/config.php');
require_once('lib/funciones.php');

$act_id          = $_POST['act_id'];
$act_idold       =                          get_param('act_idold');
$act_titulo      =                          get_param('act_titulo');
$act_contenido   = $_POST['act_contenido'];
$act_nivel       =                          get_param('act_nivel');
$act_parte_actua =                          get_param('act_parte_actua');

$sql             = "UPDATE Pac_actividades SET                         ";
$sql            .= "act_id=          " . $act_id .                      ",";
$sql            .= "act_titulo=     '" . $act_titulo .                "' ,";
$sql            .= "act_contenido=  '" . $act_contenido .             "', ";
$sql            .= "act_nivel=       " . $act_nivel .                  ", ";
$sql            .= "act_parte_actua='" . $act_parte_actua .             "'";
$sql            .= "where act_id=    " . $act_id .                       "";
$rs              = execute_sql($sql);

echo "actualizado";
header('location:page.php?op=16');
