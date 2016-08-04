 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-md-offset-2 col-md-8">
                        <h1 class="text-center">Ejercicio físico</h1>
                        <hr>
                        <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="form">
                            <!-- INICIO ACTIVIDAD-->
                            <div class="form-group">
                                <label class="col-md-6">¿Realiza algún tipo de ejercicio físico? <button type="button" class="tool" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Cualquier movimiento corporal producido por los músculos esqueléticos que exija gasto de energía">?</button></label>
                                <div class="radio col-md-6">
                                    <label>
                                        <input type="radio" name="actividad" value="Si" id="fisica_si" required <?php if(strcmp($actividad, 'Si')==0) echo 'checked'; ?>> Si
                                    </label>
                                    <label>
                                        <input type="radio" name="actividad" value="No" id="fisica_no" required <?php if(strcmp($actividad, 'No')==0) echo 'checked'; ?> cheked> No
                                    </label>
                                </div>
                            </div>
                            <!-- FIN ACTIVIDAD -->
                            <!-- Que actividad -->
                            <div class="form-group duracion visible trans1">
                                <label class="col-md-6">¿Que ejercicio físico realiza?</label>
                                <div class="col-md-6">         
                                    <input type="text" class="form-control" name="actividad-fisica" id="actividad" placeholder="Ingrese la actividad" value="<?php if(isset($actividadfisica)) echo $actividadfisica; ?>">             
                                </div>
                            </div>
                            <!-- fin que actividad -->
                            <!-- LUGAR -->
                            <div class="form-group duracion visible trans1">
                                <label class="col-md-6">¿Lugar donde realiza ejercicio?</label>
                                <div class="col-md-6">         
                                    <input type="text" class="form-control" name="lugar" id="lugar" placeholder="Ingrese el lugar" value="<?php if(isset($lugar)) echo $lugar; ?>">             
                                </div>
                            </div>
                            <!-- fin LUGAR -->
                            <!-- INICIO SEMANA -->
                            <div class="form-group duracion visible trans1">
                                <label class="col-md-6">¿Cuantos días a la semana?</label>
                                <div class="col-md-6"> 
                                    <input id="ex6" type="text" name="duracion-semana" data-slider-min="1" data-slider-max="7" data-slider-step="1" data-slider-value="<?php if(isset($duracionsemana) and $duracionsemana != 0) echo $duracionsemana; else echo 4; ?>">
                                    <span id="ex6CurrentSliderValLabel"><span id="ex6SliderVal"> <?php if(isset($duracionsemana) and $duracionsemana != 0) echo $duracionsemana; else echo 4; ?></span> Días.</span>
                                </div>
                            </div>
                            <!-- FIN SEMANA -->
                            <!-- INICIO TIEMPO -->
                            <div class="form-group duracion visible trans1">
                                <label class="col-md-6">¿Cuanto tiempo por día?</label>
                                <div class="col-md-6"> 
                                    <input id="ex7" type="text" name="duracion-horas" data-slider-min="1" data-slider-max="240" data-slider-step="1" data-slider-value="<?php if(isset($duracionhoras) and $duracionhoras != 0) echo $duracionhoras; else echo 60; ?>">
                                    <span id="ex7CurrentSliderValLabel"><span id="ex7SliderVal"> <?php if(isset($duracionhoras) and $duracionhoras != 0) echo $duracionhoras; else echo 60; ?></span> Min.</span>
                                </div>
                            </div>
                            <!-- FIN TIEMPO -->
                            <!-- intensidad -->
                            <div class="form-group duracion visible trans1">
                                <label class="col-md-6">intensidad <button type="button" class="tool" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Ligera: No me canso mucho &#13;&#13; Moderada: Me canso, pero soy capaz de aguantar mucho tiempo &#13;&#13;Intensa: Quedo agotad@">?</button></label>
                                <div class="col-md-6">         
                                    <select name="intensidad" required>
                                        <option value="Ligera" <?php if(isset($intensidad) and strcmp($intensidad, 'Ligera') == 0) echo 'selected'; ?>>Ligera</option>
                                        <option value="Moderada" <?php if(isset($intensidad) and strcmp($intensidad, 'Moderada') == 0) echo 'selected'; ?>>Moderada</option>
                                        <option value="Intensa" <?php if(isset($intensidad) and strcmp($intensidad, 'Intensa') == 0) echo 'selected'; ?>>Intensa</option>
                                    </select>             
                                </div>
                            </div>
                            <!-- fin intensidad -->
                            <br>
                            <input class="btn btn-success pull-left" type="submit" value="Guardar" />
                        </form>     
                    </div>
                </div>            
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->       
        <script>
            $( document ).ready(function() {
                if($("#fisica_si").is(':checked'))
                    $('.duracion').removeClass('visible');
                var formulario = $('#form');
                formulario.on('submit',function(e){
                    var guardando;
                    guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
                    $('.col-md-offset-2').html(guardando);
                    e.preventDefault();
                    $.post(
                        "<?= base_url('intranet/insertar_actividad_fisica'); ?>",
                        formulario.serialize(),
                        function(respuesta){
                            location.reload();
                        });
                });
                $('.tool').tooltip();
                var i;
                for(i=0;i<10;i++)
                    $(".menu_nutra li").eq(i).removeClass('active');
                $(".menu_nutra li").eq(5).addClass('active'); 
                               
                $("#ex6").slider();
                $("#ex6").on("slide", function(slideEvt) {
                    $("#ex6SliderVal").text(slideEvt.value);
                });
                $("#ex7").slider();
                $("#ex7").on("slide", function(slideEvt) {
                    $("#ex7SliderVal").text(slideEvt.value);
                });
                $('#fisica_si').click(function(event) {
                    $('.duracion').removeClass('visible');
                    $('#actividad').attr('required', '');
                });
                $('#fisica_no').click(function(event) {
                    $('.duracion').addClass('visible');
                    $('#actividad').removeAttr('required');
                });
            });
        </script>