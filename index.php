<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Juego mario</title>
    </head>
    <body>
        <?php
            echo("<h1 style='color: blue;'>Juego mario</h1>"); // despliega un mensaje en el cliente
        ?>
        <h2>Si te gusto el juego, mandanos un comentario acerca de él</h2>
        <form action="Contacto.php" method="GET">
            <input type="text" name="comentario" required minlength="20" maxlength="25" />
            <input type="submit" value="Enviar comentario"/>
        </form>
        
        <img id="animacion" src="img/sprite_mario.png"/>
    </body>
</html>