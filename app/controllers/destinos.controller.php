<?php
require_once 'app/models/destinos.model.php';
require_once 'app/views/destinos.view.php';
require_once 'app/helpers/registro.helper.php';


//encapsulo funciones dentro de la clase destinoscontroller
class DestinosController {
    //atributos de la clase
    private $model;
    private $view;
    private $helper;


    function __construct(){
            $this->helper = new AuthHelper();
            $this->model = new DestinosModel();
            $this->view = new DestinosView($this->helper->getUser());
            
           
    }



public function showDestinos() {
    $destinos = $this->model->getAllDestinos();
    $this->view->showDestinos($destinos);
}


public function Destinos(){
    $destinos = $this->model->getAllDestinos();
    $this->view->Destinos($destinos);
}



}