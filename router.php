<?php
require_once 'app/controllers/task.controller.php';
require_once 'app/controllers/registro.controller.php';
require_once 'app/controllers/destinos.controller.php';
require_once 'app/controllers/pasaje.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $controller = new AuthController();
        $controller->showFormLogin();
       
        break;
   /* case 'registrarse' :
        $controller = new AuthController();
        $controller-> registroUser();   
        */
    case 'validate':
        $controller = new AuthController();
       
        $controller->registroUser();
        break;

    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case 'list':
        $controller = new TaskController();
        $controller->showTasks();
        break;
    case 'add':
        $controller = new TaskController();
        $controller->addTask();
        break;
    case 'delete':
        $controller = new TaskController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $controller->deleteTask($id);
        break;
    case "finalize":  // finalize/:ID
        $controller = new TaskController();
        $id = $params[1];
        $controller->finalizeTask($id);
        break;
    case 'post':
            $controller = new TaskController();
            $controller->post();
            break;

    case "home":
        $controller = new DestinosController();
        //$destinos = $params[1];
        $controller->showDestinos();    
        break;
    case "destinos" :
        $controller = new DestinosController();
        $controller->Destinos(); 
        break;  
        
    case "pasajes" :
            $controller = new PasajeController();
            $controller->showPasajebyNombre(); 
            break;
    default:
        echo('404 Page not found');
        break;
}

