<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">digite su edad</label>
            <input type="number" name="edad" min="1" max="25">
            <input type="submit">
    </form>
</body>
</html>



<?php

$_i= $_GET['edad'];
while ($_i <= 18)
{
    print ("USTED NO PUEDE VER CONTENIDO NO APTO PARA NIÑOS");
    break;
}
print (" HOLA, Bienvenido");
?>


