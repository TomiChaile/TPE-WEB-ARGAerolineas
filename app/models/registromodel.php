<?php

class UserModel {

    private $db;

    public function __construct() {
       $this->db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
      // $this->db = mysqli_connect("localhost","root","","aerolineas");
    }

    public function getForm() {
       
        $query = $this->db->prepare('SELECT * FROM registro');
        $query->execute();

        
        //obtengo respuesta con fetchall
       

       // return $registro;
    }

    public function getUserByEmail($email) {
        $query = $this->db->prepare("SELECT * FROM registro WHERE email = ?");
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
      
    }




    public function insertUsuario($email,$clave){
    
        $query = $this->db->prepare("INSERT INTO registro (email, clave) VALUES (?,?)");  
        $query->execute([$email,$clave]);
       
        
       
        

        //obtengo y devuelvo el ID nuevo
        
    }

   

}
