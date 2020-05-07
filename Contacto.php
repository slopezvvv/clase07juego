<?php

$comentario = $_GET["comentario"];

if(strlen($comentario) > 25 ){
    //echo("<script>alert('El comentario no puede ser mayor a 25 caracteres, porfavor meta los dedos bien');</script>");
    header("Location: index.php?error=0&otravariable=1");
}

?>

<h1>
    <?php echo($comentario); ?>
</h1>