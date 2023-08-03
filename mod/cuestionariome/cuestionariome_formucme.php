 <?php
    require_once('lib/config.php');
    require_once('lib/funciones.php');
    require_once('lang/es.php');
    ?>

 <form method="post" action="page.php?op=10" id="cuestionario">


     <table width="200" cellspacing="1" cellpadding="1" border="1">
         <thead>
             <tr>
                 <td colspan="4">
                     ¬||¬ CUESTIONARIO MUSCULO ESQUELETICO ¬||¬</td>
             </tr>
         </thead>
         <tbody>
             <tr>
                 <td colspan="2"><b>Usted a sentido molestias durante los ultimos 7 meses</b></td>
                 <td colspan="2"><b>Usted a sentido molestias durante los ultimos 12 meses</b></td>
             </tr>
             <tr>
                 <td colspan="2"><b>CUELLO</b></td>
                 <td colspan="2"><b>CUELLO</b></td>
             </tr>


             <tr>
                 <td>si</td>
                 <td><input type=radio name="rta1" value="si"></td>
                 <td>si</td>
                 <td><input type=radio name="rta2" value="si" id="rta2"></td>
             </tr>
             <tr>
                 <td>no</td>
                 <td><input type=radio name="rta1" value="no"> </td>
                 <td>no</td>
                 <td><input type=radio name="rta2" value="no" id="rta2"> </td>
             </tr>
             <tr>
                 <td colspan="2"><b>HOMBROS</b></td>
                 <td colspan="2"><b>HOMBROS</b></td>
             </tr>
             <tr>
                 <td>no</td>
                 <td><input type=radio name="rta3" value="no" id="rta3"></td>
                 <td>no</td>
                 <td><input type=radio name="rta4" value="no" id="rta4"></td>
             </tr>
             <tr>
                 <td><b>si </b> hombro derecho </td>
                 <td><input type=radio name="rta3" value="hombro derecho" id="rta3"></td>
                 <td><b>si </b> hombro derecho </td>
                 <td><input type=radio name="rta4" value="hombro derecho" id="rta4"></td>
             </tr>
             <tr>
                 <td>hombro izquierdo</td>
                 <td><input type=radio name="rta3" value="hombro izquierdo" id="rta3">&nbsp;</td>
                 <td>hombro izquierdo</td>
                 <td><input type=radio name="rta4" value="hombro izquierdo " id="rta4"></td>
             </tr>
             <tr>
                 <td>ambos hombros </td>
                 <td><input type=radio name="rta3" value=" ambos hombros" id="rta3"></td>
                 <td>ambos hombros </td>
                 <td><input type=radio name="rta4" value="ambos hombros" id="rta4"></td>
             </tr>
             <tr>
                 <td colspan="2"><b>CODOS</b></td>
                 <td colspan="2"><b>CODOS</b></td>
             </tr>
             <tr>
                 <td>no</td>
                 <td><input type=radio name="rta5" value="no" id="rta5"></td>
                 <td>no</td>
                 <td><input type=radio name="rta6" value="no" id="rta6"></td>
             </tr>
             <tr>
                 <td><b>si</b> codo derecho </td>
                 <td><input type=radio name="rta5" value="codo derecho" id="rta5"></td>
                 <td><b>si</b> codo derecho</td>
                 <td><input type=radio name="rta6" value="codo derecho" id="rta6"></td>
             </tr>
             <tr>
                 <td>codo izquierdo</td>
                 <td><input type=radio name="rta5" value="codo izquierdo" id="rta5"></td>
                 <td>codo izquierdo</td>
                 <td><input type=radio name="rta6" value="codo izquierdo" id="rta6"></td>
             </tr>
             <tr>
                 <td>ambos codos</td>
                 <td><input type=radio name="rta5" value="ambos codos" id="rta5"></td>
                 <td>ambos codos</td>
                 <td><input type=radio name="rta6" value="ambos codos" id="rta6"></td>
             </tr>
             <tr>
                 <td colspan="2"><b>MUÑECAS/MANOS</b></td>
                 <td colspan="2"><b>MUÑECAS/MANOS</b></td>
             </tr>
             <tr>
                 <td>no</td>
                 <td><input type=radio name="rta7" value="no" id="rta7"></td>
                 <td>no</td>
                 <td><input type=radio name="rta8" value="no"></td>
             </tr>
             <tr>
                 <td><b>si</b> ambas muñecas</td>
                 <td><input type=radio name="rta7" value="ambas muñecas" id="rta7"></td>
                 <td><b>si</b> ambas muñecas</td>
                 <td><input type=radio name="rta8" value="ambas muñecas"></td>
             </tr>
             <tr>
                 <td>muñeca izquierda</td>
                 <td><input type=radio name="rta7" value="muñeca izquierda" id="rta7"></td>
                 <td>muñeca izquierda</td>
                 <td><input type=radio name="rta8" value="muñeca izquierda"></td>
             </tr>
             <tr>
                 <td>muñeca derecha</td>
                 <td><input type=radio name="rta7" value="muñeca derecha" id="rta7"></td>
                 <td>muñeca derecha</td>
                 <td><input type=radio name="rta8" value="muñeca derecha"></td>
             </tr>
             <tr>
                 <td>ambas manos</td>
                 <td><input type=radio name="rta7" value="ambas manos" id="rta7"></td>
                 <td>ambas manos</td>
                 <td><input type=radio name="rta8" value="ambas manos"></td>
             </tr>
             <tr>
                 <td>mano derecha</td>
                 <td><input type=radio name="rta7" value="mano derecha" id="rta7"></td>
                 <td>mano derecha</td>
                 <td><input type=radio name="rta8" value="mano derecha"></td>
             </tr>

             <tr>
                 <td>mano izquierda</td>
                 <td><input type=radio name="rta7" value="manos izquierda" id="rta7"></td>
                 <td>mano izquierda</td>
                 <td><input type=radio name="rta8" value="mano izquierda"></td>
             </tr>
         </tbody>
     </table>



     <br>
     <section id="listaA">
         <?php echo $cadena['p17']; ?>
     </section>
     <br>
     <?php require_once('lang/tabla.php'); ?>

     <br>

     <section id="listaA">
         <?php echo $cadena['p67']; ?>
     </section>
     <br>
     <table border="1px">
         <tr>
             <td>

                 <?php echo $cadena['p68']; ?> </td>
             <td> <input size=1px type="text" name="pie" id="pie"> </td>
             <td>
                 <?php echo $cadena['p72']; ?> </td>
             <td> <input size=1px type="text" name="medio" id="medio"></td>
             <td>
                 <?php echo $cadena['p69']; ?> </td>
             <td> <input size=1px type="text" name="cucli" id="cucli"></td>
             <td>
                 <?php echo $cadena['p73']; ?> </td>
             <td> <input size=1px type="text" name="flexionandot" id="flexionandot"></td>
         </tr>
         <td>
             <?php echo $cadena['p70']; ?> </td>
         <td> <input size=1px type="text" name="girandot" id="girandot"></td>
         <td>
             <?php echo $cadena['p74']; ?> </td>
         <td> <input size=1px type="text" name="inclinandoadelante" id="inclinandoadelante"></td>
         <td>
             <?php echo $cadena['p71']; ?> </td>
         <td> <input size=1px type="text" name="sentado" id="sentado"></td>
         <td>
             <?php echo $cadena['p75']; ?> </td>
         <td> <input size=1px type="text" name="caminando" id="caminando"></td>
         </tr>
     </table>


     <table border="1px">
         <tr>
             <td colspan="4"><b><?php echo $cadena['p76']; ?> </b></td>
         </tr>

         <tr>
             <td colspan="4"> <?php echo $cadena['p77']; ?> </td>
         </tr>
         <br>

         <tr>
             <td> <?php echo $cadena['p78']; ?>
             </td>

             <td>
                 si <input type=radio name="rta40" value="si">
                 no <input type=radio name="rta40" value="no"> </td>
         </tr>

         <tr>
             <td> <?php echo $cadena['p79']; ?> </td>

             <td>si <input type=radio name="rta41" value="si" id="rta41">
                 no <input type=radio name="rta41" value="no" id="rta41"> </td>
         <tr>
             <td> <?php echo $cadena['p80']; ?></td>
             <td>
                 si <input type=radio name="rta42" value="si" id="rta42">
                 no <input type=radio name="rta42" value="no" id="rta42">
             </td>
         <tr>
             <td> <?php echo $cadena['p81']; ?>

             </td>
             <td>

                 si <input type=radio name="rta43" value="si" id="rta43">
                 no <input type=radio name="rta43" value="no" id="rta43"> </td>
         </tr>
         </tr>
     </table>

     </tbody>
     </table>


     <input type="submit" value="Enviar">

 </form>
 </table>