    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="container">
                <div class="col-md-offset-1 col-md-8">
                    <h1 class="text-center">Datos generales</h1>
                    <hr>
                    <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="user">
                    <!--INICIO INGRESO NOMBRE-->
                        <div class="form-group">
                            <label class="col-md-3">Nombre completo</label>
                            <div class="col-md-9">         
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" value="<?php echo $nombre; ?>" disabled>             
                            </div>
                        </div>
                    <!--FIN NOMBRE-->
                    <!--INICIO FECHA DE NACIMIENTO-->
                        <div class="form-group">
                            <label class="col-md-3">Fecha de nacimiento</label>
                            <div class="col-md-9">         
                                <input type="text" class="form-control" name="nacimiento" id="nacimiento" placeholder="Ingrese su fecha de nacimiento" value="<?php echo $fecha; ?>" disabled>             
                            </div>
                        </div>
                    <!--FIN FECHA DE NACIMIENTO-->
                    <!-- INICIO FECHA -->
                        <div class="form-group">
                            <label class="col-md-3">Edad</label>
                            <div class="col-md-9"> 
                                <?php list($año, $mes, $dia) = explode('-', $fecha); 
                                    $ano_diferencia  = date("Y") - $año;
                                    $mes_diferencia = date("m") - $mes;
                                    $dia_diferencia   = date("d") - $dia;
                                    if ($dia_diferencia < 0 || $mes_diferencia < 0)
                                        $ano_diferencia--;
                                ?>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" value="<?php echo "$ano_diferencia años"; ?>" disabled>
                            </div>
                        </div>
                    <!-- FIN FECHA -->
                    <!-- INICIO SEXO -->
                        <div class="form-group">
                            <label class="col-md-3">Sexo</label>
                            <div class="col-md-9">
                                 <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre completo" value="<?php echo $sexo; ?>" disabled>                               
                            </div>
                        </div>
                        <!-- FIN SEXO -->  
                    <!-- INICIO MAIL -->
                        <div class="form-group">
                            <label class="col-md-3">Mail</label>
                            <div class="col-md-9">         
                                <input type="email" class="form-control" name="mail" id="mail" placeholder="Ingrese su mail" value="<?php echo $mail; ?>" disabled>              
                            </div>
                        </div>
                    <!-- FIN MAIL --> 
                    <!-- INICIO TELEFONO -->
                        <div class="form-group">
                            <label class="col-md-3">Teléfono</label>
                            <div class="col-md-9">         
                                <input type="number" class="form-control telefono" name="telefono" placeholder="Ingrese su número" value="<?php if(isset($telefono)) echo $telefono; ?>">              
                                <div class="alert alert-danger hide tel" role="alert">
                                    <p>Debe ingresar un número telefónico válido.</p>
                                </div> 
                            </div>
                        </div>
                    <!-- FIN TELEFONO -->  
                    <!-- INICIO TELEFONO2 -->
                        <div class="form-group">
                            <label class="col-md-3">Teléfono de emergencia</label>
                            <div class="col-md-9">         
                                <input type="number" class="form-control" name="telefonoEmergencia" placeholder="Ingrese su número de emergencia" value="<?php if(isset($telefonoEmergencia)) echo $telefonoEmergencia; ?>">              
                            </div>
                        </div>
                    <!-- FIN TELEFONO2 --> 
                     <!--INICIO DIRECCION-->
                        <div class="form-group">
                            <label class="col-md-3">Dirección</label>
                            <div class="col-md-9">         
                                <input type="text" class="form-control" name="direccion" id="nombre" placeholder="Ingrese su dirección" value="<?php if(isset($direccion)) echo $direccion; ?>" >             
                            </div>
                        </div>
                    <!--FIN DIRECCION-->
                        <br>
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </form>     
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper --> 
    <script>
        $(document).ready(function(){
            var telefono = $('.telefono');
            var formulario = $('#user');
            formulario.on('submit',function(e){
                e.preventDefault();
                if(telefono.val().length !=0 && telefono.val().length<8  )
                     $('.tel').removeClass('hide').delay(100).queue(function(){
                        $(this).addClass('animated shake').delay(1000).queue(function(){
                            $(this).removeClass('shake animated');
                            $(this).dequeue();
                        });
                        $(this).dequeue();
                     });
                else{
                    var guardando;
                    guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
                    $('.col-md-offset-1').html(guardando);
                    $.post(
                        "<?= base_url('intranet/insertar_user'); ?>",
                        formulario.serialize(),
                        function(respuesta){
                            location.reload();
                        });                        
                }
            });
        });
    </script> 

        

    
