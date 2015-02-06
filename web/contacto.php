<?php include('modulos/header.php'); ?>
<div class="container-fluid">
    <div class="row">
       <div class="banner">
           <img src="img/banner/contacto.jpg"  class="img-responsive banner-full" alt="">
           <h1>Contacto</h1>
       </div>
    </div>
</div>
<div class="container">
    <div class="row bottom-margin">
        <div class="col-md-5"><img src="img/tienda.jpg" alt="" class="img-responsive img-circle img-border img-center bottom-margin"></div>
        <div class="col-md-7">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="nombreContacto" class="col-sm-3">Nombre:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-contact" id="nombreContacto" maxlength="30">   
                    </div>
                </div>
                <div class="form-group">
                    <label for="empresaContacto" class="col-sm-3">Empresa:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-contact" id="empresaContacto" maxlength="30">
                    </div>
                </div>
                <div class="form-group">
                    <label for="puestoContacto" class="col-sm-3">Puesto:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-contact" id="puestoContacto">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="CiudadContacto" class="col-sm-3">Ciudad:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-contact" id="CiudadContacto">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="telContacto" class="col-sm-3">Teléfono:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-contact" id="telContacto" maxlength="10">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="emailContacto" class="col-sm-3">E-mail:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control form-contact" id="emailContacto">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="comentariosContacto" class="col-sm-3">Comentarios:</label>
                    <div class="col-sm-9">
                        <textarea name="" id="comentariosContacto" cols="30" rows="10" class="form-control form-contact"></textarea>
                    </div>
                    
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn-light-green">Enviar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
<div class="jumbotron back-suc">
               <div class="container">
                   <div class="row">
                     <div class="back-suc-text">
                      <h4>Con más de 200 sucursales en todo México.</h4>
                       <p>
                           <a href="#" class="btn-green">Visítanos</a>
                       </p>
                      </div>
                   </div>
               </div>
            </div>
<?php include('modulos/footer.php'); ?>