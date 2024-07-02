<section class="container rounded">

<div class="row">

<div class="mt-5 mb-2">
<h1 class="text-center fw-bold display-4 pb-5">Contactá con nosotros.</h1>
</div>    

        <div class="col-6">
            <img class="w-100 rounded-5 border border-4 border-success" src="img/bicis/bicistore_bici10.jpeg" alt="">
        </div>
        <div class="col-6">
             <form action="datos/procesar_datos.php" method="POST">
                    <div class="mb-3">
                        <label class="mb-3 form-label" for="nombre">Nombre</label>
                        <input class="form-control border border-success" type="text" name="nombre" id="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="mb-3 form-label" for="apellido">Apellido</label>
                        <input class="form-control border border-success" type="text" name="apellido" id="apellido" required>
                    </div>

                    <div class="mb-3">
                        <label class="mb-3 form-label" for="correo">Email</label>
                        <input class="form-control border border-success" type="email" name="correo" id="correo" required>
                    </div> 

                    <div class="mb-3">
                        <label class="form-label" for="mensaje">Mensaje:</label>
                        <textarea class="form-control border border-success" name="mensaje" id="mensaje"></textarea>
                    </div>
                    
                    <div class="text-center">
                        <input class="btn btn-success px-5 rounded-5" type="submit" value="Enviar">
                    </div>

             </form>
        </div>

</div>

</section>

<div class= "px-5 py-5">
    <h1 class="text-center fs-2 fw-bold mt-5">Desarrollado por</h1>
    <div class="card rounded-5 text-center my-5 mx-5">
            <img src="img/me.jpg" class="card-img rounded-5 border border-4 border-success" alt="imagen del desarrollador">
        <div class="card-img-overlay">
            <h3 class="pt-5 card-title fw-bold">Emiliano Bellomo</h3>
            <p class="card-text fw-bold">Fecha de Nacimiento: 19/01/1987</p>
            <p class="card-text fs-7"><small>Mail: bellomoemi@gmail.com</small></p>
        </div>
    </div>
</div>