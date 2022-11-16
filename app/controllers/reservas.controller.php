<?php

require_once 'app/models/reservas.model.php';
require_once 'app/views/reservas.view.php';
require_once 'app/helpers/registro.helper.php';


class ReservasController {

    private $model;
    private $view;
    private $helper;


    function __construct(){
     $this->helper = new AuthHelper();
     $this->model = new ReservasModel(); 
     $this->view = new ReservasView($this->helper->getUser());
    

   // $authHelper = new AuthHelper();
    //$authHelper->checkLoggedIn();
    }



public function showReservas(){
        //obtiene tareas del modelo
        
        $reservas = $this->model->getAllReservas();
       // $edit = $this->model->getTasks($id);
        $this->view->showReservas($reservas);
    }
    



    public function addReserva() {
        $fecha = $_POST['fecha'];
        $ida = $_POST['ida'];
        $vuelta = $_POST['vuelta'];
        $precio = $_POST['precio'];
        $usuario = $_POST['usuario'];
        $clase = $_POST['clase'];

        $id = $this->model->insertReserva($fecha,$ida,$vuelta,$precio,$usuario,$clase);

        header("Location: " . BASE_URL); 
    }
   
   public function deleteReserva($id) {
        $this->model->deleteReservaById($id);
        header("Location: " . BASE_URL);
    }



    public function editForm($id){
       
        $EditarPasaje = $this->model->editarviaje($id);
        $this->view->editReserva($EditarPasaje);
       // $id=$_POST['id'];
        

       // header("Location: " . BASE_URL);
    }

    public function updatePasaje(){
        if (isset($_POST['fecha']) &&  isset($_POST['ida']) && isset($_POST['vuelta'])
            && isset($_POST['precio']) && isset($_POST['usuario']) && isset($_POST['clase'])){
            $this->helper->checkLoggedIn();    
            $EditarPasaje = new stdClass();
            $EditarPasaje->id = $_POST['id'];
            $EditarPasaje->fecha = $_POST['fecha'];
            $EditarPasaje->ida = $_POST['ida'];
            $EditarPasaje->vuelta = $_POST['vuelta'];
            $EditarPasaje->precio = $_POST['precio'];
            $EditarPasaje->usuario = $_POST['usuario'];
            $EditarPasaje->clase = $_POST['clase'];
            //paso el objeto producto al modelo, para hacer el update en la DB
            $this->model->editViajeById($EditarPasaje);
            header("Location: " . BASE_URL . 'list');
        } else{
            var_dump("Complete todos los datos");
            die();
        }
    }

}