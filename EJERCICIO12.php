<?php
    $nom="Cristian Felipe";
    $apel="Rojas Camayo";
    $tdoc="CC";
    $ndoc="1004249852";
    $nmovil="3214863458";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-primario-sutil">
    <center><h1>formulario</h1></center>
  <div class="container-sm" data-bs-theme="dark" class="card text-bg-primary mb-3" style="max-width: 18rem;">
    <form action="">
        <div class="mb-3" >
            <label for="exampleFormControlInput1" class="form-label">El nombre del aprendiz es:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $nom;?> ">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">El apellido del aprendiz es:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $apel;?> ">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">TIPO DE DOCUMENTO:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $tdoc;?> ">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NUMERO DE DOCUMENTO:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $ndoc;?> ">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NUMERO DE MOVIL:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $nmovil;?> ">
        </div>
        <center><input type="submit" class="btn btn-outline-danger"></center>
    </form>
  </div>






  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>