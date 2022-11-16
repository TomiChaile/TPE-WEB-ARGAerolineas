<?php

class PasajeModel{

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
    }


    


public function getPasaje(){
   
    $query = $this->db->prepare("SELECT * FROM pasaje");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    
    }

    function getAllPasajes(){
        //abro conexion
       

        //enviar la consulta
        $query = $this->db->prepare('SELECT * FROM pasaje');
        $query->execute();
        

        //obtengo respuesta con fetchall
        $pasaje = $query->fetchAll();

        return $pasaje;
}

function insertPasaje($fecha,$ida,$vuelta,$id_destino,$precio,$nombre,$clase){
        
    $query = $this->db->prepare('INSERT INTO pasaje (fecha, ida, vuelta,id_destino, precio, nombre, clase) VALUES (?,?,?,?,?,?,?)');
    $query->execute([$fecha,$ida,$vuelta,$id_destino,$precio,$nombre,$clase]);

    //obtengo y devuelvo el ID nuevo
    return $this->db->lastInsertId();
}








    public function getAllPasaje(){
        // 1. conexión a la DB, abierta por el constructor de la clase
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM pasaje ");
        $query->execute();
        // 3. obtengo los resultados
         // devuelve un arreglo de objetos
        return $query->fetchAll(PDO::FETCH_OBJ);;
    }

    public function detalleDestino($id){
   
        $query = $this->db->prepare("SELECT * FROM pasaje INNER JOIN destinos ON pasaje.id_destino = destinos.id_destino WHERE pasaje.id_pasaje = ?");
        
        $query->execute([$id]);
        $boleto = $query->fetch(PDO::FETCH_OBJ);
        return $boleto;
        }

        
        public function getpasajeById($id) {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT Clase FROM pasaje WHERE id_pasaje = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $respuesta = $query->fetch(PDO::FETCH_OBJ);

        return $respuesta->modelo;
    }

    public function getDestinoById($id) {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT id_destino FROM pasaje WHERE id_destino = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $respuesta = $query->fetch(PDO::FETCH_OBJ);

        return $respuesta;
    }
    

    function deletePasajeById($id){
        $query = $this->db->prepare ('DELETE FROM pasaje WHERE id_pasaje=?');
        $query->execute([$id]);
    }


    public function editViajeById($EditarPasaje) {
        
        $query = $this->db->prepare("UPDATE pasaje SET fecha=?, ida=?, vuelta=?, precio=?, nombre=?, clase=? WHERE id_pasaje=?");
       
        $query->execute([$EditarPasaje->fecha, $EditarPasaje->ida, $EditarPasaje->vuelta,$EditarPasaje->precio, $EditarPasaje->nombre, $EditarPasaje->clase,$EditarPasaje->id]);
       
    }
     


    public  function editarviaje($id){
        $query = $this->db->prepare("SELECT * FROM pasaje WHERE id_pasaje=?");
        $query->execute([$id]);
        $EditarPasaje = $query->fetch(PDO::FETCH_OBJ);
        return $EditarPasaje;
    }


   






    
}