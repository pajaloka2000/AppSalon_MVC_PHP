<div class="barra">
    <p><span>Hola: </span> <?php echo $nombre ?? ''; ?></p>
    <a class="boton" href="/logout">Cerrar sesion</a>
</div>

<?php if (isset($_SESSION['admin'])) {?>
        <div class="barra-servicios">
            <a class="boton" href="/admin">Ver citas</a>
            <a class="boton" href="/servicios">Ver servicios</a>
            <a class="boton" href="/servicios/crear">Agregar servicios</a>
        </div>
<?php } ?>