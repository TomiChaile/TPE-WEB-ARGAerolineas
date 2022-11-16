{include file="header.tpl"}

<h1>Pasaje con destino a {$pasaje->nombre}</h1>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Fecha</th>  
        <th scope="col">Ida</th> 
        <th scope="col">Vuelta</th>  
        <th scope="col">Precio</th> 
    </tr>
  </thead>
 
    <tbody>
      <tr>
      <td>{$pasaje->fecha}</td>
      <td>{$pasaje->ida}</td>
      <td>{$pasaje->vuelta}</td>
      <td>U$D {$pasaje->precio}</td>
      </tr>
    </tbody>

    

</table>