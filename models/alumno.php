<?php

require_once("bd.php");

class Alumno{

private $nombre;
private $apellido;
private $rut;
private $carrera;


public function __construct()
{
}

  public function getNombre()
    {
        return $this->nombre;
    }

     public function getApellido()
    {
        return $this->apellido;
    }

     public function getRut()
    {
        return $this->rut;
    }

     public function getCarrera()
    {
        return $this->carrera;
    }

      public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

      public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

      public function setRut($rut)
    {
        $this->rut = $rut;
    }

      public function setCarrera($carrera)
      {
        $this->carrera = $carrera;
      }

    public function agregar($alumno)
    {
      $nombre= $alumno->getNombre();
      $apellido=$alumno->getApellido();
      $rut=$alumno->getRut();
      $carrera=$alumno->getCarrera();
    
      $bd= new BD();
      $cnx = $bd->getConexion()->prepare("INSERT INTO alumnos(nombre,apellido,rut,carrera) VALUES (?,?,?,?)");
      $cnx->bindparam(1,$nombre);
      $cnx->bindparam(2,$apellido);
      $cnx->bindparam(3,$rut);
      $cnx->bindparam(4,$carrera);
      $cnx->execute();
    }

    public function verListado()
    {
    	$bd= new BD();
        $sql = "SELECT * FROM alumnos";
        $cnx = $bd->getConexion()->prepare($sql);
        $cnx->execute();
        $rs= $cnx->fetchAll();
        $alumnos = [];
        if($rs){
        foreach ($rs as $fila) { 
           $alumno= new Alumno();
           $alumno->setNombre($fila["nombre"]);
           $alumno->setApellido($fila["apellido"]); 
           $alumno->setRut($fila["rut"]);
           $alumno->setCarrera($fila["carrera"]);
         
           $alumnos[] =$alumno;
        }
    }
        return $alumnos;
    
    }

    public function eliminarAlumno($nombre)
    {
      $bd= new BD();
      $cnx = $bd->getConexion()->prepare("DELETE FROM alumnos WHERE nombre= ?");
      $cnx->bindparam(1,$nombre);
      $cnx->execute();
    }


}	
