<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';


 
class DestinosView {

    private $smarty;


    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showDestinos($destinos) {
        $this->smarty->assign('destinos', $destinos);
        $this->smarty->display('templates/destinosTask.tpl');
    }

    function Destinos($pasaje) {
        $this->smarty->assign('pasaje', $pasaje);
        $this->smarty->display('templates/PasajesTask.tpl');
    }



    function showError(){
        echo"<h2> Error! </h2>";
    }

}