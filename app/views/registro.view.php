<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class AuthView {
    private $smarty;

    public function __construct( $user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user); // inicializo Smarty
    }

   public function showFormLogin($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/formLogin.tpl');
        
    }

    

    function showError() {
        echo "<h1>ERROR! </h1>";
       
    }



}
