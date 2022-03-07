<?php 

require_once ("/xampp/htdocs/Crud/controller/controller.php");

$alumnoController = new AlumnoController();

$validacion = (isset($_GET["op"]) && !empty($_GET["op"]));

if(!$validacion){
    $alumnoController->inicio();

}else{
    $op=$_GET["op"];

    if($op=="inicio"){
        $alumnoController->inicio();
    }

if($op=="agregar"){
$alumnoController->agregar();
}

$alumnoController->agregar();
if($op=="agregar"){
	$nombre= $_POST["txtnombre"];
	$apellido= $_POST["txtapellido"];
	$rut= $_POST["txtrut"];
	$carrera= $_POST["txtcarrera"];

	/*if(isset($_POST["verListado"])){
		$alumnoController->verListado();
	}else{*/
		$alumnoNuevo = new Alumno();

		$alumnoNuevo->setNombre($nombre);
		$alumnoNuevo->setApellido($apellido);
		$alumnoNuevo->setRut($rut);
		$alumnoNuevo->setCarrera($carrera);

		$alumnoNuevo->agregarAlumno($alumnoNuevo);
	}

if($op=="verListado"){
$alumnoController->verListado();
}
$alumnoController->eliminarAlumno();
} 
?>
