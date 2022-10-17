<?php
require_once 'app/models/pasaje.model.php';
require_once 'app/views/pasaje.view.php';
require_once 'app/helpers/registro.helper.php';


//encapsulo funciones dentro de la clase destinoscontroller
class PasajeController {
    //atributos de la clase
    private $model;
    private $view;
    private $helper;


    function __construct(){
            $this->helper = new AuthHelper();
            $this->model = new PasajeModel();
            $this->view = new PasajeView($this->helper->getUser());
            
           
    }



    public function showPasajebyNombre() {
        $pasaje = $this->model->getPasajeByNombre();
        $this->view->showPasajebyNombre($pasaje);
    }

}