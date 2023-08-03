<tr><td>
<h1>
<?php echo $cadena['p1']; ?></h1>
<?php echo $cadena['p2']; ?></td></tr>
<br>
<tr><td>
<?php echo $cadena['p3']; ?>
<select name="dia" id="dia" >
<?php 
for($i=1;$i<=31;$i++)
{?>

<option value="<?php echo $i;?>">

<?php
echo $i;
?></option>

<?php
}
?>

</select>

 
 <?php echo $cadena['p4']; ?>
<select name="mes" id="mes">
<option value="1"> <?php echo $cadena['p4e']; ?></option>
<option value="2"> <?php echo $cadena['p4f']; ?></option>
<option value="3"> <?php echo $cadena['p4m']; ?></option>
<option value="4"> <?php echo $cadena['p4a']; ?></option>
<option value="5"> <?php echo $cadena['p4m']; ?></option>
<option value="6"> <?php echo $cadena['p4j']; ?></option>
<option value="7"> <?php echo $cadena['p4ju']; ?></option>
<option value="8"> <?php echo $cadena['p4ag']; ?></option>
<option value="9"> <?php echo $cadena['p4s']; ?></option>
<option value="10"> <?php echo $cadena['p4o']; ?></option>
<option value="11"> <?php echo $cadena['p4n']; ?></option>
<option value="12"> <?php echo $cadena['p4d']; ?></option>
</select>


<?php echo $cadena['p5']; ?><select name="anio" id="anio">
<?php for($i=2013;$i<=2020;$i++)
{
?>
<option value="<?php echo $i;?>">

<?php
echo $i;
?></option>

<?php
}
?>

</select>
<br>
<?php echo $cadena['p6']; ?>

<?php echo $cadena['p7']; ?><input type=radio name="genero" value="masculino" id="genero"> 

<?php echo $cadena['p8']; ?><input type=radio name="genero" value="femenino" id="genero"> 

<br>

<?php echo $cadena['p9']; ?><br>
<?php echo $cadena['p3']; ?>
<select name="dia1" id="dia1">
<?php 
for($i=1;$i<=31;$i++)
{
?>
<option value="<?php  echo $i; ?>">
<?php
echo $i; ?>
</option>
<?php
}
?>

</select>

 
<b><?php echo $cadena['p4']; ?></b>
<select name="mes1">
<option value="1"> <?php echo $cadena['p4e']; ?></option>
<option value="2"> <?php echo $cadena['p4f']; ?></option>
<option value="3"> <?php echo $cadena['p4m']; ?></option>
<option value="4"> <?php echo $cadena['p4a']; ?></option>
<option value="5"> <?php echo $cadena['p4m']; ?></option>
<option value="6"> <?php echo $cadena['p4j']; ?></option>
<option value="7"> <?php echo $cadena['p4ju']; ?></option>
<option value="8"> <?php echo $cadena['p4ag']; ?></option>
<option value="9"> <?php echo $cadena['p4s']; ?></option>
<option value="10"><?php echo $cadena['p4o']; ?></option>
<option value="11"><?php echo $cadena['p4n']; ?></option>
<option value="12"><?php echo $cadena['p4d']; ?></option>
</select>


<b><?php echo $cadena['p5']; ?></b>
<select name="anio1">
<?php 
for($i=1900;$i<=2013;$i++)
{?>
<option value="<?php echo $i;?>">

<?php
echo $i;
?></option>

<?php
}
?>

</select>


<br>
<?php echo $cadena['p10']; ?>

<?php echo $cadena['p11']; ?><input type=radio name="manodominante" value="diestro"  id="mano"> 

<?php echo $cadena['p12']; ?><input type=radio name="manodominante" value="zurdo" id="mano"> 

<?php echo $cadena['p13']; ?><input type=radio name="manodominante" value="ambidiestro" id="mano"> 
<br>

<?php echo $cadena['p14']; ?><input size=5px type="text" name="estatura" value="" id="estatura">cm <br>

<?php echo $cadena['p15']; ?><input size=9px type="text" name="peso1" value="" id="peso1">kg<br><br>

<b><?php echo $cadena['p16']; ?></b><br>

<?php echo $cadena['p17']; ?><br><br>
