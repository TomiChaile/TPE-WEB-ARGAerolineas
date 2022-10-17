<?php
require_once 'app/views/registro.view.php';
require_once 'app/models/registromodel.php';
require_once 'app/helpers/registro.helper.php';


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

    
    public function Registro(){
        $resultado = $this->model->insertUsuario();
        $this->view->Registro($resultado);
    }
    
    

    public function registroUser() {
        // toma los datos del form
      //  $nombre = $_POST['nombre'];
      
        if(!empty($_POST['email'])  &&  !empty($_POST['password'])){
            $email = $_POST['email'];
            $password =  password_hash($_POST['password'], PASSWORD_BCRYPT); 
           
        $this->model->insertUsuario($email,$password);
      
       header("Location: " . BASE_URL . 'list');
        die();  
        
    }else{
        $this->view->showError();
    }
      //  $resultado = $this->model->insertUsuario();
      //  $this->view-> printResultado($resultado);

        // busco el usuario por email 
}    



public function validateUser() {
    // toma los datos del form
    

  

    // busco el usuario por email
    $user = $this->model->getUserByEmail($email);
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // verifico que el usuario existe y que las contraseñas son iguales
    if ($user && password_verify($password, $user->password)) {

        // inicio una session para este usuario
        
        $_SESSION['id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['IS_LOGGED'] = true;
        header("Location: " . BASE_URL . 'list');

       
    } else {
        // si los datos son incorrectos muestro el form con un erro
       $this->view->showFormLogin("El usuario o la contraseña no existe.");
    } 
  }



    


     function logout() {
      
        session_destroy();
        header("Location: " . BASE_URL);
    }


}


