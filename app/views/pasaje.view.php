<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';


 
class PasajeView {

    private $smarty;


    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

function showPasajebyNombre($boleto) {
 
        $this->smarty->assign('boleto', $boleto);
        $this->smarty->display('templates/PasajesTask.tpl');
    }


}

