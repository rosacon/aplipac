<?php
session_start();


require_once('lib/config.php');
require_once('lib/funciones.php');

$op = @$_GET['op'];
?>
<!DOCTYPE html>
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex, nofollow">

<head>
  <title>ApliPac >> Sistema de Pausas Activas</title>
  <style>
    @import url('css/estilo.css');
  </style>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/validata.js"></script>
</head>

<body>
  <header id="head">
    <div id="conthead">
      <img src="css/img/logo11.png" />
    </div>
  </header>
  <?php

  if (isset($_SESSION['sid'])) {
  ?>
    <section id="tool">
      <section id="tool1">
        Bienvenido(a)
        <b><?php echo $_SESSION['uname']; ?></b>
        <b><a href="index.php">(Salir)</a></b>
      </section>
    </section>
    <section id="wrapper">

      <section id="wleft">

        <?php require_once('accion.php'); ?>
      </section>
      <section id="wright">
        <?php require_once('mod/menu/menu_principal.php'); ?>
      </section>
      <div class="cls"></div>
    </section>
  <?php } else { ?>
    <section id="wrapper">
      <h1>Debe Iniciar sesion para utilizar el sistema</h1>

    </section>
  <?php } ?>
  <footer id="footer">
    <h6>Desarrollado por:
      Rosa Maria Contreras Villamizar
      para optar el titulo de tecnologa en Redes y Sistemas Teleinformaticos</h6>
  </footer>
</body>

</html>