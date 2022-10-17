<?php

require_once 'app/models/task.model.php';
require_once 'app/views/task.view.php';
require_once 'app/helpers/registro.helper.php';

class TaskController {

    private $model;
    private $view;
    private $helper;


    function __construct(){
     $this->helper = new AuthHelper();
     $this->model = new TaskModel(); 
     $this->view = new TaskView($this->helper->getUser());
    

//$authHelper = new AuthHelper();
    // $authHelper->checkLoggedIn();
    }



public function showTasks(){
        //obtiene tareas del modelo
        
        $tareas = $this->model->getAllTasks();

        $this->view->showTasks($tareas);
    }


    public function post()
        {
            $this->helper->checkLoggedIn();
            // leer $_POST
            // chequear datos
            // this->model->insert($datos)
            header("Location: " . BASE_URL);
        }



public function addTask() {
        $fecha = $_POST['fecha'];
        $ida = $_POST['ida'];
        $vuelta = $_POST['vuelta'];
        $precio = $_POST['precio'];
        $usuario = $_POST['usuario'];
        $Clases = $_POST['Clases'];

        $id = $this->model->insertTask($fecha,$ida,$vuelta,$precio,$usuario,$Clases);

        header("Location: " . BASE_URL); 
    }
   
   public function deleteTask($id) {
        $this->model->deleteTaskById($id);
        header("Location: " . BASE_URL);
    }

    public function finalizeTask($id) {
        $this->model->finalize($id);
        header("Location: " . BASE_URL); 
    }

    public function editTask($id) {
        $this->model->editTask($id);
        header("Location: " . BASE_URL); 
    }

}