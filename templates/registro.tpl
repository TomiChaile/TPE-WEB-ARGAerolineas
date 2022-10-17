{include 'header.tpl'}
    
{if(!empty($_POST['email'])  &&  !empty($_POST['password']))} {


  {if($query)}{
            
            <h3>¡Te incribiste correctamente!</h3>
            
        } {else}{
            
            <h3>¡ERROR!</h3>
            
        }
       {else}{
        
        <h3>¡Por favor,completar los datos!</h3>
        
    }
    }