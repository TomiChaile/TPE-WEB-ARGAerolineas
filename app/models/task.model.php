<?php

class TaskModel{


    private $db;

    function __construct() {
        $this->db = $this->connect();
    }


    function connect(){
    $db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
    return $db;
}

    function getAllTasks(){
        //abro conexion
        
       
        //enviar la consulta
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();

        //obtengo respuesta con fetchall
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }

    function insertTask($fecha,$ida,$vuelta,$precio,$usuario,$Clases){

       

        $query = $this->db->prepare('INSERT INTO `usuario`(fecha, ida, vuelta, precio, usuario, Clases,finalizada) VALUES (?,?,?,?,?,?,?)');
        $query->execute( [$fecha,$ida,$vuelta,$precio,$usuario, $Clases, false]);

        //obtengo y devuelvo el ID nuevo
        return $this->db->lastInsertId();
    }



    function deleteTaskById($id){
        $query = $this->db->prepare ('DELETE FROM usuario WHERE id=?');
        $query->execute([$id]);
    }

    public function finalize($id) {
        $query = $this->db->prepare('UPDATE usuario SET finalizada = 1 WHERE id = ?');
        $query->execute([$id]);

    }

    


}