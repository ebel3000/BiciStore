
<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiciStore - Mensaje enviado</title>

    <style>
          body {
              font-family: Arial, Helvetica, sans-serif;
              background-color: #f0f0f0;
              text-align: center;  
          }  

          h1 {
            color: #333;
          }

          h2 {
            color: #555;
          }

          p{
            color: #777;
          }
    </style>
</head>
<body>

<br>
<br>
  <h1>¡Gracias! <br> Tu mensaje fue enviado con éxito.<br><br></h1>
     <p>Nombre : <?= $nombre ?></p>
     <p>Apellido :<?= $apellido ?> </p>
     <p>Email: <?= $correo ?></p>

      <h3>Mensaje</h3>
      <p><?= $mensaje ?></p>
      
      <img width="450px" src="../img/exito.png" alt="exito imagen">
       
    
</body>
</html>