<?php

class ReservasModel{


    private $db;

    function __construct() {
        $this->db = $this->connect();
    }


    function connect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
    return $db;
}

    function getAllReservas(){
        //abro conexion
        
       
        //enviar la consulta
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();

        //obtengo respuesta con fetchall
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }

    public function getTasks($id) {
    
        $query = $this->db->prepare("SELECT * FROM usuario WHERE id=?");
        $query->execute([$id]);      
        $EditarPasaje = $query->fetch(PDO::FETCH_OBJ); 
        
        return $EditarPasaje;
    }

    function insertReserva($fecha,$ida,$vuelta,$precio,$usuario,$clase){
        
        $query = $this->db->prepare('INSERT INTO `usuario`(fecha, ida, vuelta, precio, usuario,clase) VALUES (?,?,?,?,?,?)');
        $query->execute( [$fecha,$ida,$vuelta,$precio,$usuario,$clase]);

        //obtengo y devuelvo el ID nuevo
        return $this->db->lastInsertId();
    }



    function deleteReservaById($id){
        $query = $this->db->prepare ('DELETE FROM usuario WHERE id=?');
        $query->execute([$id]);
    }

   

    public function editViajeById($EditarPasaje) {
        
        $query = $this->db->prepare("UPDATE usuario SET fecha=?, ida=?, vuelta=?, precio=?, usuario=?, clase=? WHERE id=?");
       
        $query->execute([$EditarPasaje->fecha, $EditarPasaje->ida, $EditarPasaje->vuelta,$EditarPasaje->precio, $EditarPasaje->usuario, $EditarPasaje->clase,$EditarPasaje->id]);
       
    }
     




    public  function editarviaje($id){
        $query = $this->db->prepare("SELECT * FROM usuario WHERE id=?");
        $query->execute([$id]);
        $EditarPasaje = $query->fetch(PDO::FETCH_OBJ);
        return $EditarPasaje;
    }


}


 

    


