<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
  <title>ApliPac  Sistema de Pausas Activas</title>
  <style>
    @import url('css/estilo.css');
  </style>
  
  <script type="text/javascript"  src="js/jquery.js"></script>
  <script type="text/javascript"  src="js/jquery.validate.js"></script>
  <script type="text/javascript"  src="js/validata.js"></script>
</head>
<body>
<header id="head">
   <div id="conthead">
<img src="css/img/logo11.png" />
      

   </div>
</header>
<section id="wrapper">

  <section id="wleft">

<?php require_once('login.php');?>



  </section>
  <section id="wright">



  </section> 
  <div class="cls"></div>
</section>
<footer id="footer">
  <h6>Desarrollado por: Rosa Maria Contreras Villamizar 
para optar el titulo de tecnologa en Redes y Sistemas  Teleinformaticos</h6>
</footer>
</body>
</html>
