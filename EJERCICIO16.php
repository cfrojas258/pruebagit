<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">digite un numero</label>
        <input type="number" min="0" max="8" name="num" >
        <input type="submit">
    </form>
</body>
</html>





<?php
$opc=$_GET['num'];
    switch ($opc){
        case 1:
            echo "El dia que escoge es lunes";
            break;
        case 2:
            echo "El dia que escoge es martes";
            break;
        case 3:
            echo "El dia que escoge es miércoles";
            break;
        case 4:
            echo "El dia que escoge es jueves";
            break; 
        case 5:
            echo "El dia que escoge es viernes";
            break;
        case 6:
            echo "El dia que escoge es sabado";
            break; 
        case 7:
            echo "El dia que escoge es domingo";
            break; 

        default:
            echo "No se reconoce el dia";
    }
?>