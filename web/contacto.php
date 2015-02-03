<?php include('modulos/header.php'); ?>
<div class="row">
    <img src="img/banner/contacto.jpg"  class="img-responsive" alt="">
    <h1>Contacto</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6"><img src="img/tienda.jpg" alt="" class="img-responsive img-circle"></div>
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="nombreContacto">Nombre:</label>
                    <input type="text" class="form-control" id="nombreContacto" maxlength="30">
                </div>
                <div class="form-group">
                    <label for="empresaContacto">Empresa:</label>
                    <input type="text" class="form-control" id="empresaContacto" maxlength="30">
                </div>
                <div class="form-group">
                    <label for="puestoContacto">Puesto:</label>
                    <input type="text" class="form-control" id="puestoContacto">
                </div>
                <div class="form-group">
                    <label for="CiudadContacto">Ciudad:</label>
                    <input type="text" class="form-control" id="CiudadContacto">
                </div>
                <div class="form-group">
                    <label for="telContacto">Teléfono:</label>
                    <input type="text" class="form-control" id="telContacto" maxlength="10">
                </div>
                <div class="form-group">
                    <label for="emailContacto">E-mail:</label>
                    <input type="email" class="form-control" id="emailContacto">
                </div>
                <div class="form-group">
                    <label for="comentariosContacto">Comentarios:</label>
                    <textarea name="" id="comentariosContacto" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
        </div>
    </div>
</div>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <h1>Con más de 200 sucursales en todo México.</h1>
            <a href="#" class="btn btn-verde">Visítanos</a>
        </div>
    </div>
</div>
<?php include('modulos/footer.php'); ?>