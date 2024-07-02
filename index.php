<?php

require_once "libraries/funciones.php";

$secciones_validas = [
     "home" => [
        "titulo" => "Bienvenidos"
     ],
     "catalogo" => [
        "titulo" => "Catálogo"
       ],
       "ford" => [
        "titulo" => "Ford"
       ],
       "massi" => [
        "titulo" => "Massi"
       ],
       "olmo" => [
        "titulo" => "Olmo"
       ],
     "taller" => [
        "titulo" => "Taller"
     ],
     "contacto" => [
        "titulo" => "Contacto"
     ],
     "producto" => [
        "titulo" => "producto"
     ],
     "marca" => [
      "titulo" => "Marcas"
   ],
     

  ];

  $seccion = $_GET['sec'] ?? "home";


  if(!array_key_exists($seccion, $secciones_validas)){
      $vista= "404";
      $titulo = "404 - pagina no encontrada";
  }else {
     $vista= $seccion;
     $titulo = $secciones_validas[$seccion]['titulo'];
  }

?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> BiciStore <?= $titulo  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  </head>
  <body style="background-color: #f4f4f2;">

  <!-- Navegacion -->
  <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body " data-bs-theme= "dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> 
        <img src="img/logo/bicicleta.png" width="60" height="60" alt="Logo" class="d-inline-block align-text-center">
      BiciStore
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=home">Home</a>
        </li>
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Catalogo</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="index.php?sec=catalogo">Todos</a></li>
      <li><a class="dropdown-item" href="index.php?sec=marca&mar=massi">Massi</a></li>
      <li><a class="dropdown-item" href="index.php?sec=marca&mar=olmo">Olmo</a></li>
      <li><a class="dropdown-item" href="index.php?sec=marca&mar=ford">Ford</a></li>
    </ul>
  </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=taller">Taller</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?sec=contacto">Contacto</a>
        </li>
    </ul>
    </div>
  </div>
</nav>

    <main class="container">
          <?php
            require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
          ?>
    </main>

    <footer class="bg-secondary">
        <div class= "text-white fs-5 text-center pt-5">
        <i class="fa-brands fa-instagram px-1"></i>
        <i class="fa-brands fa-x-twitter px-1"></i>
        <i class="fa-brands fa-facebook-f px-1"></i>
        <p class= "fs-5">/Bicistore_arg</p>
        </div>
        <p class="text-light text-center p-4">Todos los derechos reservados - 2024 - Tienda BiciStore</p>
    </footer>
 </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
