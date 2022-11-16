<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';


 
class PasajeView {

    private $smarty;


    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

function obtengoPasajes($boleto) {
      //  $this->smarty->assign('destinos', $destinos);
        $this->smarty->assign('boleto', $boleto);
        $this->smarty->display('templates/Pasajes.tpl');
    }

    function detalledestino($pasaje){
        $this->smarty->assign('pasaje', $pasaje);
        $this->smarty->display('DetalleDestino.tpl');
    }

    function showPasaje($pasaje,$destinos) {
        $this->smarty->assign('pasaje', $pasaje);
        $this->smarty->assign('destinos', $destinos);

        $this->smarty->display('templates/Pasajes.tpl');
    }




    function showError() {
        
        $this->smarty->display("showError.tpl");
    }

    function editReserva($EditarPasaje){
        $this->smarty->assign('edit',$EditarPasaje);
    
        $this->smarty->display('form_editP.tpl');
    }



    


}

