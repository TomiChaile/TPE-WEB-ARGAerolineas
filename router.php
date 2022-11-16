<?php
require_once 'app/controllers/reservas.controller.php';
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
    case 'registrarse':
        $controller = new AuthController();
        $controller->showFormRegistro(); 
        break;
    case 'login' :
        $controller = new AuthController();
        $controller->showFormLogin();
        break;    
   /* case 'registrarse' :
        $controller = new AuthController();
        $controller-> registroUser();   
        */
    case 'validate':
        $controller = new AuthController();
        $controller->validateUser();
        break;
    case 'ingresar' :
        $controller = new AuthController();
        $controller->registroUser();
        break;    

    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    case 'list':
        $controller = new ReservasController();
       // $id = $params[1];
        $controller->showReservas();
        break;
    case 'add':
        $controller = new ReservasController();
        $controller->addReserva();
        break;
    case 'delete':
        $controller = new ReservasController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $controller->deleteReserva($id);
        break;
    case 'edit' :  // finalize/:ID
        $controller = new ReservasController();
        $id = $params[1];
        $controller->editForm($id);
        break; 
    case 'update' :
        $controller = new ReservasController();
       // $id = $params[1];
        $controller->updatePasaje();
        break;    
    case 'post':
            $controller = new ReservasController();
            $controller->post();
            break;

    case "home":
        $controller = new DestinosController();
        //$destinos = $params[1];
        $controller->showDestinos();    
        break;
    case "clases":
            $controller = new ClasesController();
            //$destinos = $params[1];
            $controller->showClases();    
            break;
    case 'agregar':
            $controller = new DestinosController();
            $controller->addDestino();
            break; 
     case 'editdestino' :
            $controller = new DestinosController();
            $id = $params[1];
            $controller->editFormD($id);
            break;
    case 'updatedestino' :
            $controller = new DestinosController();
            $controller->updateDestino();   
            break;   
    case 'eliminar' :
            $controller = new DestinosController();
            $id = $params[1];
            $controller->deleteDestino($id);   
            break;   
        
    case 'DetalleClase':
            $controller = new PasajeController();
            $id_pasaje = $params[1];
            $controller->Filtrar($id_pasaje);
            break;
    
        
    case "pasajes" :
        $controller = new PasajeController();
        $controller->showPasajes(); 
        break;
    case 'addpasaje':
        $controller = new PasajeController();
        $controller->addPasaje();
        break;
     
    case 'DetalleDestino' :
            $controller = new PasajeController();
            $id = $params[1];
            $controller->DetalleDestinos($id); 
            break;     
    case 'Delete':
            $controller = new PasajeController();
                // obtengo el parametro de la acción
            $id = $params[1];
            $controller->deletePasaje($id);
            break;    
    case 'Edit' :  // finalize/:ID
            $controller = new PasajeController();
            $id = $params[1];
            $controller->editForm($id);
            break; 
    case 'Update' :
            $controller = new PasajeController();
               // $id = $params[1];
            $controller->updatePasaje(); 
            break;
    
    default:
        echo('404 Page not found');
        break;
}

