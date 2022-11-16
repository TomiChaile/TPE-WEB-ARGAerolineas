<?php
require_once 'app/views/registro.view.php';
require_once 'app/models/registromodel.php';
//require_once 'app/helpers/registro.helper.php';


class AuthController {
    private $view;
    private $model;
    private $helper;
    
    public function __construct() {
        $this->helper = new AuthHelper();
        $this->model = new UserModel();
        $this->view = new AuthView($this->helper->getUser());


        
    }


    public function showFormLogin(){
        
        $resultado = $this->model->getForm();

        $this->view->showFormLogin($resultado);
    }
    
    public function showFormRegistro(){
        
        $resultado = $this->model->getForm();

        $this->view->showFormRegistro($resultado);
    }

    
    public function Registro(){
        $resultado = $this->model->insertUsuario();
        $this->view->Registro($resultado);
    }
    
    

    public function registroUser() {
        // toma los datos del form
      //  $nombre = $_POST['nombre'];
      
        if(!empty($_POST['email'])  &&  !empty($_POST['clave'])){
            $email = $_POST['email'];
            $clave =  password_hash($_POST['clave'], PASSWORD_BCRYPT); 
           
        $this->model->insertUsuario($email,$clave);
      
       header("Location: " . BASE_URL . 'login');
        die();  
        
    }else{
        $this->view->showError();
    }
      //  $resultado = $this->model->insertUsuario();
      //  $this->view-> printResultado($resultado);

        // busco el usuario por email 
}    



public function validateUser() {

    if(!empty($_POST['email'])  &&  !empty($_POST['clave'])){
    // toma los datos del form
    $email = $_POST['email'];
    $clave = $_POST['clave'];

  

    // busco el usuario por email
    $user = $this->model->getUserByEmail($email);

    // verifico que el usuario existe y que las contraseñas son iguales
    if ($user && password_verify($clave,$user->clave)) {

        // inicio una session para este usuario
        session_start();
       // $_SESSION['id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['clave'] = $user->clave;
        //$_SESSION['IS_LOGGED'] = true;
        header("Location: " . BASE_URL . 'home');

       
    } else {
        // si los datos son incorrectos muestro el form con un erro
       $this->view->showFormLogin("El usuario o la contraseña no existe.");
    } 
  }
}



    


     function logout() {
       
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    }


}


