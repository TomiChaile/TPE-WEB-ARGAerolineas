<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class ReservasView{

    private $smarty;

    public function __construct($user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user);
    }

    function showReservas($reservas) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($reservas)); 
        $this->smarty->assign('reservas', $reservas);
       // $this->smarty->assign('id', $id);
       // $this->smarty->assign('edit', $edit);


        // mostrar el tpl
        $this->smarty->display('ReservasList.tpl');
    }

    
    

    function editReserva($EditarPasaje){
        $this->smarty->assign('edit',$EditarPasaje);
    
        $this->smarty->display('form_edit.tpl');
    }
}




    


