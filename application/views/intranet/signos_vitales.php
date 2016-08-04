    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="container">
                <div class="col-md-offset-1 col-md-8">
                    <h1 class="text-center">Signos Vitales</h1>
                    <hr>
                    <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="signos">
                    <!--INICIO OXIGENO-->
                        <div class="form-group">
                            <label class="col-md-5">Saturación Oxigeno</label>
                            <div class="col-md-7">         
                                <input type="text" class="form-control" name="Saturacion" id="Saturacion" placeholder="Ingrese Saturación Oxigeno" value="<?php if(isset($Saturacion)) echo $Saturacion; ?>" <?php if(!$login_admin){ echo "readonly";} ?>>             
                            </div>
                        </div>
                    <!--FIN OXIGENO-->     
                    <!--INICIO OXIGENO-->
                        <div class="form-group">
                            <label class="col-md-5">Pulso en reposo por minuto</label>
                            <div class="col-md-7">         
                                <input type="text" class="form-control" name="Pulso" id="Pulso" placeholder="Ingrese Pulso en reposo por minuto" value="<?php if(isset($Pulso)) echo $Pulso; ?>" <?php if(!$login_admin){ echo "readonly";} ?>>             
                            </div>
                        </div>
                    <!--FIN OXIGENO-->
                    <!--INICIO OXIGENO-->
                        <div class="form-group">
                            <label class="col-md-5">Presión arterial</label>
                            <div class="col-md-7">         
                                <input type="text" class="form-control" name="Presion" id="Presion" placeholder="Ingrese Presión arterial" value="<?php if(isset($Presion)) echo $Presion; ?>" <?php if(!$login_admin){ echo "readonly";} ?>>             
                            </div>
                        </div>
                    <!--FIN OXIGENO-->
                    <?php if($login_admin){ ?> 
                    <input type="submit" class="btn btn-success " value ="Guardar">
                    <?php } ?>                  
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper --> 
    <script>
        $(document).ready(function(){
            $(document).ready(function(){
                var formulario = $('#signos');
                formulario.on('submit',function(e){
                    e.preventDefault();
                    var guardando;
                    guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
                    $('.col-md-offset-1').html(guardando);
                    $.post(
                        "<?= base_url('intranet/insertar_signos'); ?>",
                        formulario.serialize(),
                        function(respuesta){
                            location.reload();
                        }
                    ); 
                });
            });
        });
    </script> 

        

    
