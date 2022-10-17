<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <a href="index.html">Home</a>

        <?php
        function renderForm(){

         echo'
           <form method="POST">
           <h2>Inicia Sesion!</h2>
               <input type="text" name="nombre" placeholder="Ingrese su nombre..."/>
               <input type="text" name="email" placeholder="Ingrese su email..."/>
                <input type="password" name="clave" placeholder="Ingrese su password..."/>
               <input type="submit" name="acceder" value="Iniciar sesion">
                
           </form>
           ';
        } 




include_once("sesion.php");
           //abro una nueva sesion
  //abro una nueva sesion
  session_start();

  //Si esta logueado lo saludo, sino muestro el form de login
  if(!empty($_SESSION["logueado"]) && $_SESSION["logueado"] === true){
    echo "Sesion iniciada como: " . $_SESSION["nombre"];
  }else{
    renderForm();
  }
     

?>
</body>
</html>