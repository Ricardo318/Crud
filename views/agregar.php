<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Ingresar Alumnos</title>
</head>
<body>
	<center>
			<img src=https://kauel.com/wp-content/uploads/2019/05/Web_Kauel_Logos_Iplasex.png>
			<br><br><br>

	<form action="agregar.php?op=agregar" method="POST">

		<h1>Registro de Estudiante</h1>

   <input type="text" name="nombre" placeholder="Ingrese Nombre" >
   <br><br>
   <input type="text" name="apellido" placeholder="Ingrese Apellido" >
   <br><br>
   <input type="text" name="rut" placeholder="Ingrese Rut" >
   <br><br>
   <input type="text" name="carrera" placeholder="Ingresar Carrera" >
   <br><br>
   <script >
			function alerta(){

			alert("Alumno ingresado Correctamente");
}
	</script>

<br>
<input type="submit" id="Registrar" onclick="alerta()" value="Registrar">
<a href= verListado.php>IR A LISTADO DE ALUMNOS</a>
</center>		
</form>
</body>
</html>