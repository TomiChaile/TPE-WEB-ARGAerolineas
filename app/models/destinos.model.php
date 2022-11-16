<?php

class DestinosModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
    }

    public function filtrar($clase){
        $query = $this->db->prepare("SELECT * FROM destinos WHERE clase like ? ");
        $query->execute(["%$clase%"]);
        $clases = $query->fetchAll(PDO::FETCH_OBJ);
        return $clases;
    }
   
    function insertDestino($nombre,$clase){
        
        $query = $this->db->prepare('INSERT INTO `destinos`(nombre,clase) VALUES (?,?)');
        $query->execute([$nombre,$clase]);

        //obtengo y devuelvo el ID nuevo
        return $this->db->lastInsertId();
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



public function detalleClase($id){
   
    $query = $this->db->prepare("SELECT * FROM pasaje INNER JOIN destinos ON pasaje.id_destino = destinos.id_destino WHERE pasaje.id_pasaje = ?");
    
    $query->execute([$id]);
    $boleto = $query->fetch(PDO::FETCH_OBJ);
    return $boleto;
    }



public function editDestinoById($EditarDestino) {
        
    $query = $this->db->prepare("UPDATE destinos SET nombre=? WHERE id_destino=?");
   
    $query->execute([$EditarDestino->nombre, $EditarDestino->id]);
   
}
  


public function editarDestino($id){
    $query = $this->db->prepare('SELECT * FROM destinos WHERE id_destino=?');
    $query->execute([$id]);
    $EditarDestino = $query->fetch(PDO::FETCH_OBJ);
    return $EditarDestino;
}


function deleteDestinoById($id){
    $query = $this->db->prepare ('DELETE FROM destinos WHERE id_destino=?');
    try{
        $query->execute([$id]);
        }
        catch(PDOException $e){
            var_dump($e);
        }
    }


}