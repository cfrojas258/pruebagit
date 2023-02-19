<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <form action="" class="grid text-center">
        <label for="">digite un numero:</label>
        <input type="number" name="foo1" value="hola"> <br>
        <label for="">digite un numero:</label>
        <input type="number" name="var"><br>
        <input type="submit" class="btn btn-outline-primary"><br>
        <?php 
        echo"el numero 1 es:" .$_GET['foo1'];
        echo"<br>el numero 2 es:" .$_GET['var'];
        ?>
    </form>
        <?php
            $var1=$_GET['foo1'];
            $var2=$_GET['var'];
            $resultado1=($var1 + $var2);
            $resultado2=($var1 - $var2);
            $resultado3=($var1 * $var2);
            $resultado4=($var1 / $var2);
            echo"<br>La suma de los números es:".$resultado1;
            echo"<br>La resta de los números es:".$resultado2;
            echo"<br>La multiplicación de los números es:".$resultado3;
            echo"<br>La división de los números es:".$resultado4;
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>