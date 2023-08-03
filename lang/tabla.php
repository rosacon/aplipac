
<table border="1px">
<tr><td><b>

<?php echo $cadena['p18']; ?></b>
</td><td>
<?php echo $cadena['p19']; ?>
</td>
  <td>
	<select name="intensidadc" id="intensidadc">
	   <?php 
		for($i=0;$i<=10;$i++)
		{
	   ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	   <?php
	 	}
	   ?>
	</select>

  <td>
	<?php echo $cadena['p20']; ?>
  </td>
 </tr> 
 <tr>
  <td><b>
   	<?php echo $cadena['p21']; ?></b>
  </td>
  <td>
	<?php echo $cadena['p19']; ?>
  </td>
  <td>
	<select name="intensidadh" id="intensidadh">
	     <?php 
		for($i=0;$i<=10;$i++)
		{
	   ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	   <?php
	 	}
	   ?>
</select>

 </td>
<td>
	<?php echo $cadena['p20']; ?>
  </td></tr>

<tr>
<td>  <b>

<?php echo $cadena['p22']; ?></b></td> 
<td>
<?php echo $cadena['p19']; ?>
</td>
<td><select name="intensidadco" id="intensidadco">
   <?php 
		for($i=0;$i<=10;$i++)
		{
	   ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	   <?php
	 	}
	   ?>
	</select>
<td>
<?php echo $cadena['p20']; ?></td>
</tr>
<tr>
<td>  <b>

<?php echo $cadena['p23']; ?> </b></td>
<td>
<?php echo $cadena['p19']; ?>
</td>
<td><select name="intensidadm" id="intensidadm">
   <?php 
		for($i=0;$i<=10;$i++)
		{
	   ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	   <?php
	 	}
	   ?>
	</select>
<td>
<?php echo $cadena['p20']; ?></td>
</tr>
<tr>
<td>  <b>

<?php echo $cadena['p24']; ?> </b></td>
<td>
<?php echo $cadena['p19']; ?>
</td>
<td><select name="intensidadd" id="intensidadd">
   <?php 
		for($i=0;$i<=10;$i++)
		{
	   ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
	   <?php
	 	}
	   ?>
	</select>
<td>
<?php echo $cadena['p20']; ?></td>
</tr>
</table>
