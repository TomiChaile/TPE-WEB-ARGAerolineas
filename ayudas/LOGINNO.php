<?php



if(isset ($_POST['register'])){
//Creo la cuenta cuando venga en el POST
   if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'] )){
       $userName=$_POST['nombre'];
       $userEmail=$_POST['email'];
       $userPassword=password_hash($_POST['password'], PASSWORD_BCRYPT);

       //Obtengo el usuario de la base de datos
       $db = new PDO('mysql:host=localhost;'.'dbname=aerolineas;charset=utf8', 'root', '');
       $query = $db->prepare('SELECT * FROM registro WHERE nombre = ?');
       $query->execute([$userName]);
       $registro = $query->fetch(PDO::FETCH_OBJ);

       //Si el usuario existe y las contraseñas coinciden
       if($registro && password_verify($userPassword,($registro->password))){
        //Guardo datos en el arreglo de sesion
        $_SESSION["logueado"] = true;
        $_SESSION["username"] = $userName;
        var_dump($_SESSION);
        echo "Acceso exitoso";
    }else{
        echo "Acceso denegado";
    }

   }
}

?>    
