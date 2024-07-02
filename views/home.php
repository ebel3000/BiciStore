<?php

/* require de productos */
require_once "libraries/productos.php";



$productos = producto_destacado();


?>

<div class="mt-5 mb-2">
    <h1 class="text-center fw-bold display-4">Tienda Online de bicicletas</h1>
</div>

<div class="mt-4 border border-4 border-success rounded-5" id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
            <img src="img/BiciStore_cover1.jpeg" class="rounded-5 d-block w-100" alt="imagen con bici1">
        </div>
        <div class="carousel-item">
            <img src="img/BiciStore_cover2.jpeg" class="rounded-5 d-block w-100" alt="imagen con bici2">
        </div>
        <div class="carousel-item">
            <img src="img/BiciStore_cover3.jpeg" class="rounded-5 d-block w-100" alt="imagen con bici3">
        </div>
        <div class="carousel-item">
            <img src="img/BiciStore_cover4.jpeg" class="rounded-5 d-block w-100" alt="imagen con bici4">
        </div>

        </div>
    </div>
</div>

<div class="mt-5 mb-3">
    <h1 class="text-center display-1">¡Últimos ingresos!</h1>
</div>

<div class="row">


    <?php foreach ($productos as $bici) { ?>

        <div class="col-3 mt-4 mb-5">
            <div class="card mb-3 rounded-5 border border-success border-2">
                <img src="img/bicis/<?= $bici['portada'] ?>" class="card-img-top rounded-5" alt="">
                <div class="card-body" style="height:125px; overflow: hidden;">
                    <p class="fs-6 m-0 fw-bold text-primary"><?= $bici['marca'] ?> Modelo <?= $bici['modelo'] ?></p>
                    <p class="card-text"><?= recortar_palabras($bici['bajada'], 6) ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Rodado <?= $bici['rodado'] ?></li>
                    <li class="list-group-item">Color <?= $bici['color'] ?></li>
                </ul>
                <div class="card-body">
                    <p class="fs-3 mb-3 fw-bold text-success text-center">$<?= $bici['precio'] ?></p>
                    <a href="index.php?sec=producto&id=<?= $bici['id'] ?> " class="btn btn-dark w-100 fw-bold rounded-5">VER MÁS</a>
                </div>

            </div>
        </div>

    <?php } ?>
