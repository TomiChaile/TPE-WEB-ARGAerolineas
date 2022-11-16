<?php
require_once 'app/models/destinos.model.php';
require_once 'app/views/destinos.view.php';
require_once 'app/helpers/registro.helper.php';
require_once 'app/models/pasaje.model.php';



//encapsulo funciones dentro de la clase destinoscontroller
class DestinosController {
    //atributos de la clase
    private $model;
    private $view;
    private $helper;
    private $modelPasaje;


    function __construct(){
            $this->helper = new AuthHelper();
            $this->model = new DestinosModel();
            $this->modelPasaje = new PasajeModel();
            $this->view = new DestinosView($this->helper->getUser()); 
           
    }



   


    public function addDestino() {
        $nombre = $_POST['nombre'];
        $clase = $_POST['clase'];

        $id = $this->model->insertDestino($nombre,$clase);

        header("Location: " . BASE_URL . "home"); 
    }



    public function updateDestino(){
        if (isset($_POST['nombre'])){
            $this->helper->checkLoggedIn();    
            $EditarDestino = new stdClass();
            $EditarDestino->id = $_POST['id_destino'];
            $EditarDestino->nombre = $_POST['nombre'];
            //paso el objeto producto al modelo, para hacer el update en la DB
            $this->model->editDestinoById($EditarDestino);
            header("Location: " . BASE_URL . "home");
        } else{
            var_dump("Complete todos los datos");
            die();
        }
    }


    public function editFormD($id){
       
        $EditarDestino = $this->model->editarDestino($id);
        $this->view->editDestino($EditarDestino);
    
    }

public function showDestinos() {
    $destinos = $this->model->getAllDestinos();
    $this->view->showDestinos($destinos);
}


public function DetalleClases($id){
    $pasaje= $this->model->detalleClase($id);
    $this->view->detalleclase($pasaje);
}



public function deleteDestino($id) {
    $this->model->deleteDestinoById($id);
    header("Location: " . BASE_URL . "home");
}





}