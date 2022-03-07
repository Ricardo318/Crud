<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado de Alumnos</title>
</head>
<body>
	<style>
 tr{
 	box-sizing: border-box;
 	background-color:skyblue ;
}

</style>
<form>
	<table style="width: 1100px">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Rut</th>
			<th>Carrera</th>
			

	 </tr>
	</thead>
	<tbody>
		<tr>
			<?php
			   if($Alumnos){
			   foreach ($Alumnos as $alumno){?>
				<th><?php echo $alumno->getNombre() ?></th>
				<th><?php echo $alumno->getApellido() ?></th>
				<th><?php echo $alumno->getRut() ?></th>
				<th><?php echo $alumno->getCarrera() ?></th>
				   
		</tr>
	<?php 
             }
		  }

	   ?>
    </tbody>
   </table>
  </form>
  <a href=agregar.php>VOLVER A REGISTROS</a>

 </body>
</html>