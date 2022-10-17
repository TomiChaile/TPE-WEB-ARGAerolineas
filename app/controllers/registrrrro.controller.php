<?php
include_once 'app/models/registro.model.php';
include_once 'app/views/registro.view.php';
include_once 'registros.php';

//encapsulo funciones dentro de la clase destinoscontroller
class RegistroController {
    //atributos de la clase
    private $model;
    private $view;


    function __construct(){
            $this->model = new RegistrarseModel();
            $this->view = new RegistrarseView();
            $this->view = new ComentariosView($this->helper->getUser());
           
    }
  

    function showUsuariobyNombre(){
        if(isset ($_POST['register'])){
        //verifica datos obligatorios
        if(!empty($_POST['nombre'])  && !empty($_POST['email'])  &&  !empty($_POST['clave'])){
        $this->view->showError();
        die();
     //obtiene el nombre enviado por GET
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $resultado = $this->model->getUsuario();
        $this->view-> printResultado($resultado);
    }
        //le pido al modelo los nombres 
       
     

        //actualizo la vista
       
}

}
}