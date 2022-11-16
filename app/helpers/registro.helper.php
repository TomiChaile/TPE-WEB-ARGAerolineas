<?php

class AuthHelper {

     /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */

    public function __construct(){
      session_start();
    }


    public function checkLoggedIn() {
      session_start();
        if (!isset($_SESSION['email']))  {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    } 


    public function getUser(){
        return $_SESSION;
    } 

}
