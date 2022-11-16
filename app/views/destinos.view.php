<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';


 
class DestinosView {

    private $smarty;


    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showDestinos($destinos) {
        $this->smarty->assign('destinos', $destinos);
        $this->smarty->display('templates/Destinos.tpl');
    }

    function Filtrarxclase($clases){
        $this->smarty->assign('clases',$clases);
        $this->smarty->display('DetalleClase.tpl');
    }


   

  function editDestino($EditarDestino){
    $this->smarty->assign('edit',$EditarDestino);

    $this->smarty->display('templates/form_editD.tpl');
}








    function showError(){
        echo"<h2> Error! </h2>";
    }

}