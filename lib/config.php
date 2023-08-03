<?php

define('HOST', 'localhost');
define('DBNAME', 'prog_pausas');
define('USERDB', 'root');
define('CLAVE', 'admin');

global $link;
$link = mysql_connect(HOST, USERDB, CLAVE);

if(!$link){
  die("Error al conectar con la base de datos");
} else {
  mysql_select_db(DBNAME ,$link);
}

?>
