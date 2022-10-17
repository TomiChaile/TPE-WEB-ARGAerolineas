<?php

class DestinosView {

    function printDestinos($nombre,$pasaje){
        echo"<h2>Lista Por ciudad: $nombre </h2>";
    echo"<a href='index.html'> Volver </a>";

    echo "<table border='1px'>
                <thead>
                    <tr>
                        <th>Fecha</th>  
                        <th>Ida</th> 
                        <th>Vuelta</th>  
                        <th>Precio</th> 
                    </tr>
                </thead> 
                <tbody>
    ";


    foreach($pasaje as $boleto){
        echo "
                <tr>
                    <td>$boleto->fecha</td>
                    <td>$boleto->ida</td>
                    <td>$boleto->vuelta</td>
                    <td>$boleto->precio</td>
                    
                </tr>
                    
        ";
    }
    echo"
    </tbody>
    </table>";
    }



    function showError(){
        echo"<h2> Error! </h2>";
    }

}