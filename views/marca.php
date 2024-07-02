<?php

/* require de productos */
require_once "libraries/productos.php";

$biciSeleccionada = $_GET['mar'] ?? FALSE;


$productos = producto_x_marca($biciSeleccionada);

$titulo  =  $biciSeleccionada ? ucwords($biciSeleccionada ) : false


?>

<h1 class="text-center my-5 display-4 fw-bold" >Catálogo por marca <?=  $titulo ?> </h1>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $bici) { ?>
    
    <div class="col-3">
        <div class="card border-3 border border-success rounded-5 mb-3">
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
                <a href="index.php?sec=producto&id=<?= $bici ['id']?> " class="btn btn-outline-success btn-sm w-50 rounded-5 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mt-3 mb-3">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>