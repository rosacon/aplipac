 <?php 

 require_once('lib/config.php');
 require_once('lib/funciones.php'); 

 $sql = "select * from Pac_cme";
 $result = execute_sql($sql);

 ?>
  	 					 	 	 	 			 	
 <table>
 <tr>
 <?php

 while ($reg = get_result_array($result))
 {
 $sql1 = "select * from Pac_usuarios where usu_cc=".$reg['usu_cc'];
 $result1 = execute_sql($sql1);
 $reg1= get_result_array($result1);
 ?>

 <td>
 <table>
 <section id="cme">
 Resultados Cuestionario
 <?php
 echo $reg1['usu_nom']." ".$reg1['usu_ape'];
 ?>
 </section>
	 	 	 	 	 	 		 	 	
 <tr><td>cod</td><td>
 <?php echo $reg['cme_id'];?></td></tr>
 <tr><td>cedula</td><td>
 <?php echo $reg['usu_cc'];?></td></tr>
 <tr><td>rta1</td><td>
 <?php echo $reg['cme_07_step1'];?></td></tr>
 <tr><td>rta2</td><td>
 <?php echo $reg['cme_07_step2'];?></td></tr>
 <tr><td>rta3</td><td>
 <?php echo $reg['cme_07_step3'];?></td></tr>
 <tr><td>rta4</td><td>
 <?php echo $reg['cme_07_step4'];?></td></tr>
 <tr><td>rta5</td><td>
 <?php echo $reg['cme_d12_step1'];?></td></tr>
 <tr><td>rta6</td><td>
 <?php echo $reg['cme_d12_step2'];?></td></tr>
 <tr><td>rta7</td><td>
 <?php echo $reg['cme_d12_step3'];?></td></tr>
 <tr><td>rta8</td><td>
 <?php echo $reg['cme_d12_step4'];?></td></tr>
 <tr><td>rta9</td><td>
 <?php echo $reg['cme_step9'];?></td></tr>
 <tr><td>rta10</td><td>
 <?php echo $reg['cme_step10'];?></td></tr>
 <tr><td>rta11</td><td>
 <?php echo $reg['cme_step11'];?></td></tr>
 <tr><td>rta12</td><td>
 <?php echo $reg['cme_step12'];?></td></tr>
 <tr><td>rta13</td><td>
 <?php echo $reg['cme_step13'];?></td></tr> 	 	 	 	 	 	 	 		
 <tr><td>rta22</td><td>
 <?php echo $reg['cme_step20'];?></td></tr>
 <tr><td>rta23</td><td>
 <?php echo $reg['cme_step21'];?></td></tr>
 <tr><td>rta24</td><td>
 <?php echo $reg['cme_step22'];?></td></tr>
 <tr><td>rta25</td><td>
 <?php echo $reg['cme_step23'];?></td></tr>
 <tr><td>rta27</td><td>
 <?php echo $reg['cme_step24'];?></td></tr>
 <tr><td>rta28</td><td>
 <?php echo $reg['cme_step25'];?></td></tr>
 <tr><td>rta29</td><td>
 <?php echo $reg['cme_step26'];?></td></tr>
 <tr><td>rta30</td><td>
 <?php echo $reg['cme_step27'];?></td></tr>
 <tr><td>rta31</td><td>
 <?php echo $reg['cme_step28'];?></td></tr>
 <tr><td>rta32</td><td>
 <?php echo $reg['cme_step29'];?></td></tr>
 <tr><td>rta33</td><td>
 <?php echo $reg['cme_step30'];?></td></tr>
 <tr><td>rta34</td><td>
 <?php echo $reg['cme_step31'];?></td></tr>

 </table>
 <?php
 }
 ?>

 </td>
 </tr>

 </table>

