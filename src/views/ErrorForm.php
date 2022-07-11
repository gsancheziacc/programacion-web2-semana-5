<?php
//get error from header from save.php
$error = $_GET['error'];
?>
<html lang="ES">
    <head>
        <title>Error al ingresar el vehículo</title>
    </head>
    <body>
        <h1>Error al ingresar el vehículo</h1>
        <p>
            <?php echo $error ?>
        </p>
    </body>
</html>
