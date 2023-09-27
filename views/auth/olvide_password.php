<h1 class="nombre-pagina">Olvide la contraseña</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuacion</p>

<?php 
    include_once __DIR__ ."/../templates/alertas.php"
?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu email">
    </div>
    <input type="submit" value="Enviar Intracciones" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesion</a>
    <a href="/crear_cuenta">¿Aun no tienes una cuenta? Crea una</a>
</div>