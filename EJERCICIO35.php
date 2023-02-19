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
        <input type="number" name="foo">
        <label for="">digite un numero</label>
        <input type="number" name="var">
        <input type="submit">
    </form>
        <?php
            $var1=$_GET['foo'];
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

</body>
</html>