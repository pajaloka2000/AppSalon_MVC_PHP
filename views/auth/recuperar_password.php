<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo passwrod a continuacio</p>

<?php 
    include_once __DIR__ ."/../templates/alertas.php"
?>

<?php if($error) return; ?>

<form  class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu nuevo password">
    </div>
    <input type="submit" class="boton" value="Guardar nuevo password">

</form>

<div class="acciones">
    <a href="/">¿Ya tiene una cuenta? Inicia sesion</a>
    <a href="/crear_cuenta">¿Aun no tienes cuenta? Obten una</a>
</div>