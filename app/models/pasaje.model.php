<?php

class PasajeModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
    }



function getPasajeByNombre(){
   
    $query = $this->db->prepare('SELECT * FROM pasaje');
    $query->execute();
    $pasaje = $query->fetchAll();
    
    }
}