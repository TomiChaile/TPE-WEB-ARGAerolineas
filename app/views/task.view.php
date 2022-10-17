<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
class TaskView{

    private $smarty;

    public function __construct($user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user);
    }

    function showTasks($tasks) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($tasks)); 
        $this->smarty->assign('tasks', $tasks);

        // mostrar el tpl
        $this->smarty->display('taskList.tpl');
    }
}



    function showError($msg) {
        echo "<h1>ERROR! </h1>";
        echo "<h1>$msg </h1>";
    }


