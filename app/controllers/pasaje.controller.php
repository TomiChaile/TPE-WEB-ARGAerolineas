<?php
require_once 'app/models/pasaje.model.php';
require_once 'app/models/destinos.model.php';
require_once 'app/views/pasaje.view.php';
require_once 'app/helpers/registro.helper.php';
require_once 'app/controllers/destinos.controller.php';

//encapsulo funciones dentro de la clase destinoscontroller
class PasajeController {
    //atributos de la clase
    private $model;
    private $view;
    private $helper;
    private $modelDestino;
    private $viewDestino;


    function __construct(){
            $this->helper = new AuthHelper();
            $this->model = new PasajeModel();
            $this->modelDestino = new DestinosModel();
            $this->view = new PasajeView($this->helper->getUser());
            $this->viewDestino = new DestinosView();
           
    }

    public function Filtrar($clase){
        $clases = $this->modelDestino->filtrar($clase);
       
        $this->viewDestino->Filtrarxclase($clases);
    }

    public function showPasajes() {
        $pasaje = $this->model->getAllPasajes();
        $destino = $this->modelDestino->getAllDestinos();
       
    
          //  $pasaje->modelo = $this->model->getpasajeById($pasaje->id_destino);
        
        $this->view->showPasaje($pasaje,$destino);
    }

    public function addPasaje() {
        $fecha = $_POST['fecha'];
        $ida = $_POST['ida'];
        $vuelta = $_POST['vuelta'];
        $precio = $_POST['precio'];
        $nombre = $_POST['nombre'];
        $clase = $_POST['clase'];

        $destinoValue = $this->model->getDestinoById($nombre);
        //esto hace que no se inserte el destino duplicado.
        if(empty($destinoValue) == false){
            $this->view->showError();
        } else {

            $id = $this->model->insertPasaje($fecha,$ida,$vuelta,$nombre,$precio,$nombre,$clase);
            var_dump($id);
            header("Location: " . BASE_URL . "pasajes"); 
        }
    }

    
    


    public function showControllerPasaje(){
        $pasaje = $this->model->getAllPasaje();
            foreach ($pasaje as $boleto) {
                $boleto->model = $this->DestinosModel->getAllDestinos($boleto->id_destinos);
            }
        $this->view->getPasajeByNombre($boleto);
    }



    public function DetalleDestinos($id){
        $pasaje= $this->model->detalleDestino($id);
        $this->view->detalledestino($pasaje);
    }

    public function deletePasaje($id) {
       
        $destino = $this->modelDestino->searchProductsByClase($id);
        if(count($destino)>0){
            $this->view->showError();
        }
        else{
            $this->model->deletePasajeById($id);
            header("Location: " . BASE_URL . 'pasajes');
        }
            
    }

    public function editForm($id){
       
        $EditarPasaje = $this->model->editarviaje($id);
        $this->view->editReserva($EditarPasaje);
    
    }

    public function updatePasaje(){
        if (isset($_POST['fecha']) &&  isset($_POST['ida']) && isset($_POST['vuelta'])
            && isset($_POST['precio']) && isset($_POST['nombre']) && isset($_POST['clase'])){
            $this->helper->checkLoggedIn();    
            $EditarPasaje = new stdClass();
            $EditarPasaje->id = $_POST['id_pasaje'];
            $EditarPasaje->fecha = $_POST['fecha'];
            $EditarPasaje->ida = $_POST['ida'];
            $EditarPasaje->vuelta = $_POST['vuelta'];
            $EditarPasaje->precio = $_POST['precio'];
            $EditarPasaje->nombre = $_POST['nombre'];
            $EditarPasaje->clase = $_POST['clase'];
            //paso el objeto producto al modelo, para hacer el update en la DB
            $this->model->editViajeById($EditarPasaje);
            header("Location: " . BASE_URL . 'pasajes');
        } else{
            var_dump("Complete todos los datos");
            die();
        }
    }
    

}