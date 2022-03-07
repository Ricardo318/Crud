<?php  

require_once ("/xampp/htdocs/Crud/models/alumno.php");

class AlumnoController
{
	 public $alumno;


    public function __construct()
    {
        $this->alumno = new Alumno();
    }

      public function inicio()
    {
      include 'views/inicio.php';
    }

    public function verListado()
    {
    	$alumnos=$this->alumno->verListado();
      include 'views/verListado.php';
     }

     
    public function agregar($alumnoNuevo)
    {
    	$this->alumno->agregar($alumnoNuevo);
    	include 'views/agregar.php';
    }

    public function eliminarAlumno()
    {
      $this->alumno->eliminarAlumno($nombre);
      $alumnos=$this->alumno->eliminarAlumno($nombre);
      include 'views/listado.php';
    }


}























?>