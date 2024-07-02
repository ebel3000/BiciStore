<?php

/* Require de productos */

require_once "libraries/productos.php";

$productos = catalogo_todas_bicis();



?>
<div class="mt-5 mb-2">
<h1 class="text-center fw-bold display-4" >Catálogo</h1>
</div>

<div class="mt-4 mb-5 border border-4 border-success rounded-5" id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
            <img src="img/BiciStore_cover5.jpeg" class="rounded-5 d-block w-100" alt="imagen con bici1">
        </div>
        <div class="carousel-item">
            <img src="img/BiciStore_cover6.jpeg" class="rounded-5 d-block w-100" alt="imagen con bici2">
        </div>
        <div class="carousel-item">
            <img src="img/bicistore_header1.jpeg" class="rounded-5 d-block w-100" alt="imagen con bici3">
        </div>
        <div class="carousel-item">
            <img src="img/bicistore_header1.jpg" class="rounded-5 d-block w-100" alt="imagen con bici4">
        </div>

        </div>
    </div>
</div>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $bici) { ?>
    
    <div class="col-3">
        <div class="card border border-2 border-success rounded-5 mb-3">
            <img src="img/bicis/<?=$bici['portada'] ?>" class="card-img-top rounded-5" alt="">
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-6 m-0 fw-bold text-success"><?=$bici['marca'] ?> Modelo <?=$bici['modelo'] ?></p>
                <p class="card-text"><?= recortar_palabras($bici['bajada'], 6) ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Rodado <?=$bici['rodado'] ?></li>
                <li class="list-group-item">Color <?=$bici['color'] ?></li>
            </ul>
            <div class="card-body" style="height:125px; overflow: hidden;">
                <p class="fs-3 mb-3 fw-bold text-success">$<?=$bici['precio'] ?></p>
                <a href="index.php?sec=producto&id=<?= $bici ['id']?> " class="btn btn-outline-success btn-sm w-50 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mt-3 mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>