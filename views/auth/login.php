<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">inicia sesion con tus datos</p>

<?php 
    include_once __DIR__ ."/../templates/alertas.php"
?>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu email" name="email" value="<?php echo s($auth->email); ?>">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="tu contraseña">        
    </div>

    <input type="submit" value="iniciar sesion" class="boton">
</form>

<div class="acciones">
    <a href="/crear_cuenta">¿Aun no tienes una cuenta? crea una</a>
    <a href="/olvide">¿Olvidaste la contraseña? recuperala</a>
</div>