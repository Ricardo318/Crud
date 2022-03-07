<?php

class DB
{

    private $cnx;

    public function __construct()
    {
        try {
            $this->cnx = new PDO('mysql:host=localhost;dbname=bdestudiantes','root','');
            echo 'Conectado';

        } catch (PDOException $ex) {
            echo 'Error : '. $ex->getMessage();
            die();
            
        }
    }

    function getConexion()
    {
        return $this->cnx;
    }
}

?>