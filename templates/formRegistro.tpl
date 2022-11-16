{include 'header.tpl'}

<div class="mt-5 w-25 mx-auto">


    <h1>Registrate!</h1>
    <form method="POST" action="ingresar">
  
        <div class="form-group">
        
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="clave">Password</label>
            <input type="password" required class="form-control" id="clave" name="clave">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Registrarme</button>
       <div>
       <h3>Ya tienes una cuenta?</h3>
       <a href='login' type='button' class='btn btn-primary mt-3'>Iniciar Sesion</a>
       </div>
    </form>
</div>

{include file='footer.tpl'}