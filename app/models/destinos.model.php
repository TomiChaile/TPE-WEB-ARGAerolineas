<?php

class DestinosModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
    }


   




    function getAllDestinos(){
            //abro conexion
           
    
            //enviar la consulta
            $query = $this->db->prepare('SELECT * FROM destinos');
            $query->execute();
            
    
            //obtengo respuesta con fetchall
            $destinos = $query->fetchAll();
    
            return $destinos;
}



}