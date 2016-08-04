

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-md-offset-2 col-md-8">
                        <h1 class="text-center">Mediciones</h1>
                        <hr>
                        <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="form">                       
                            <!-- INICIO ESTATURA -->
                            <div class="form-group">
                                <label class="col-md-4">Estatura</label>
                                <div class="col-md-8"> 
                                    <input name="estatura" id="ex6" type="text" data-slider-min="1.30" data-slider-max="2.30" data-slider-step="0.01" data-slider-value="<?php if(isset($estatura)) echo $estatura; else echo 1.70; ?>" >
                                    <span id="ex6CurrentSliderValLabel"><span id="ex6SliderVal"> <?php if(isset($estatura)) echo $estatura; else echo 1.70; ?></span> mts.</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <!-- FIN ESTATURA -->
                            <!-- INICIO PESO -->
                            <div class="form-group">
                                <label class="col-md-4">Peso actual</label>
                                <div class="col-md-8"> 
                                    <input name="peso" id="ex7" type="text" data-slider-min="20" data-slider-max="230" data-slider-step="1" data-slider-value="<?php if(isset($peso)) echo $peso; else echo 60; ?>">
                                    <span id="ex7CurrentSliderValLabel"><span id="ex7SliderVal"> <?php if(isset($peso)) echo $peso; else echo 60;  ?></span> kg.</span>
                                </div>
                            </div>                            
                            <div class="clearfix"></div>
                            <br>
                            <!-- FIN PESO -->
                            <!--INICIO imc-->
                            <div class="form-group">
                                <label class="col-md-4">Índice de masa corporal (IMC)</label>
                                <div class="col-md-5">         
                                    <input type="text" class="form-control" name="imc" value="<?php if(isset($imc) and $imc != 0) echo $imc; ?>" id='imc' disabled> 
                                </div>
                            </div>
                            <!--FIN imc-->
                            <!-- INICIO CINTURA -->
                            <div class="form-group">
                                <label class="col-md-4">Circunferencia de cintura <button type="button" class="btn btn-default mostrar-imagen" >?</button></label>
                                <div class="col-md-8"> 
                                    <input name="cintura" id="ex8" type="text" data-slider-min="20" data-slider-max="200" data-slider-step="1" data-slider-value="<?php if(isset($cintura)) echo $cintura; else echo '50'; ?>">
                                    <span id="ex8CurrentSliderValLabel"><span id="ex8SliderVal"> <?php if(isset($cintura)) echo $cintura; else echo '50'; ?></span> cm.</span>
                                </div>
                            </div>
                            <br>
                            <!-- FIN CINTURA --> 
                            <!-- INICIO RIESGO -->
                            <div class="form-group">
                                <label class="col-md-4">Riesgo cardiovascular</label>
                                <div class="col-md-5">         
                                    <input type="text" class="form-control" name="riesgo" value="<?php if(isset($riesgo) ) echo $riesgo; ?>" id='riesgo' disabled> 
                                </div>
                            </div>  
                            <!-- FIN RIESGO -->                         
                            <!-- INICIO HUESOS -->
                            <div class="form-group">
                                <label class="col-md-4" >Contextura física <button type="button" id="contex" class="btn btn-default" >?</button></label>
                                <div class="radio col-md-8">
                                    <label id="delgada" class="medidas">
                                        <input type="radio" name="muneca" value="Pequeña" required <?php if(strcmp($muneca, 'Pequeña')==0) echo 'checked'; ?>> 
                                    </label>
                                    <label id="mediana" class="medidas">
                                        <input type="radio" name="muneca" value="Mediana" required <?php if(strcmp($muneca, 'Mediana')==0) echo 'checked'; ?>> 
                                    </label>
                                    <label id="grande" class="medidas">
                                        <input type="radio" name="muneca" value="Grande" required <?php if(strcmp($muneca, 'Grande')==0) echo 'checked'; ?>> 
                                    </label>                
                                </div>
                            </div>
                            <!-- FIN HUESOS -->
                            <hr>
                            <h3 class="text-center">Otras mediciones <button type="button" id="tool" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Mediciones realizadas con balanza de Bioimpedanciometría digital">?</button></h3>
                            <!--INICIO AGUA-->
                            <div class="form-group">
                                <label class="col-md-3">% Agua</label>
                                <div class="col-md-9">         
                                    <input type="number" class="form-control" name="agua" id="agua" placeholder="Ingrese su porcentaje de agua" value="<?php if(isset($pagua) and $pagua != 0) echo $pagua; ?>">
                                    <div class="alert alert-danger hide pagua" role="alert">
                                        <p>Debe ingresar numeros entre 0 y 100.</p>
                                    </div>            
                                </div>
                            </div>
                            <!--FIN AGUA-->
                            <!--INICIO GRASA-->
                            <div class="form-group">
                                <label class="col-md-3">% Grasa</label>
                                <div class="col-md-9">         
                                    <input type="number" class="form-control" name="grasa" id="grasa" placeholder="Ingrese su porcentaje de grasa" value="<?php if(isset($pgrasa) and $pgrasa != 0) echo $pgrasa; ?>">             
                                    <div class="alert alert-danger hide pgrasa" role="alert">
                                        <p>Debe ingresar numeros entre 0 y 100.</p>
                                    </div> 
                                </div>
                            </div>
                            <!--FIN GRASA-->
                            <!--INICIO MUSCULO-->
                            <div class="form-group">
                                <label class="col-md-3">Kilos de músculo</label>
                                <div class="col-md-9">         
                                    <input type="number" class="form-control" name="musculo" id="kmus" placeholder="Ingrese kilos de músculo" value="<?php if(isset($kmusculo) and $kmusculo != 0 ) echo $kmusculo; ?>">             
                                    <div class="alert alert-danger hide kmus" role="alert">
                                        <p>Debe ingresar solo números positivos.</p>
                                    </div>
                                </div>
                            </div>
                            <!--FIN MUSCULO-->
                            <!--INICIO MUSCULO-->
                            <div class="form-group">
                                <label class="col-md-3">Tasa metabolica basal</label>
                                <div class="col-md-9">         
                                    <input type="number" class="form-control" name="tmb" id="tmb" placeholder="Ingrese su tasa metabolica basal" value="<?php if(isset($tmb) and $tmb != 0) echo $tmb; ?>">             
                                    <div class="alert alert-danger hide tmb" role="alert">
                                        <p>Debe ingresar solo números positivos.</p>
                                    </div>
                                </div>
                            </div>
                            <!--FIN MUSCULO-->
                            <input type="hidden" id="sexo" name="sexo" value="<?php echo $sexo; ?>">
                            <input class="btn btn-success pull-left" type="submit" value="Guardar" />
                        </form>     
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <div class="modal fade" id="imagen_cintura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Como medir la circunferencia de cintura</h4>
              </div>
              <div class="modal-body">
                <img src="<?= base_url(); ?>bootstrap/css/images/medir_cintura.png" class="center-block">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="imagen_contextura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Como medir su contextura física</h4>                
              </div>
              <div class="modal-body">
                <img src="<?= base_url(); ?>bootstrap/css/images/medir.png" class="center-block" width="100%">
                <p>
                    Rodee su muñeca con los dedos de la mano contraria y a través de los dedos índice y pulgar establezca lo siguiente:
                    <br>
                    <br>
                    – Si el dedo medio no llega a tocarse con el pulgar, es complexión grande.
                    <br>
                    – Si el dedo medio y el pulgar se tocan, es complexión media.
                    <br>
                    – Si los dedos no sólo se tocan, sino que se montan uno encima de otro, nuestra complexión es pequeña.
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <script>
            $( document ).ready(function() {
                var agua    = true;
                var grasa   = true;
                var musculo = true;
                var tmb     = true;
                $('.mostrar-imagen').mouseover(function(){
                    $('#imagen_cintura').modal({show:true});
                })
                $('#contex').mouseover(function(){
                    $('#imagen_contextura').modal({show:true});
                })
                $('#tool').tooltip();
                var i;
                for(i=0;i<10;i++)
                    $(".menu_nutra li").eq(i).removeClass('active');
                $(".menu_nutra li").eq(3).addClass('active trans1'); 
                var formulario = $('#form');
                formulario.on('submit',function(e){
                    e.preventDefault();
                    if($('#agua').val()<0 || $('#agua').val()>100){
                        $('.pagua').removeClass('hide').delay(100).queue(function(){
                            $(this).addClass('animated shake').delay(1000).queue(function(){
                                $(this).removeClass('shake animated');
                                $(this).dequeue();
                            });
                            $(this).dequeue();
                         });
                        agua    = false;
                    }else{
                        agua = true;
                        $('.pagua').addClass('hide');
                    }
                    if($('#grasa').val()<0 || $('#grasa').val()>100){
                        $('.pgrasa').removeClass('hide').delay(100).queue(function(){
                            $(this).addClass('animated shake').delay(1000).queue(function(){
                                $(this).removeClass('shake animated');
                                $(this).dequeue();
                            });
                            $(this).dequeue();
                        });
                        grasa   = false;
                    }else{
                        grasa = true;
                        $('.pgrasa').addClass('hide');
                    }
                    if($('#kmus').val()<0 ){
                        $('.kmus').removeClass('hide').delay(100).queue(function(){
                            $(this).addClass('animated shake').delay(1000).queue(function(){
                                $(this).removeClass('shake animated');
                                $(this).dequeue();
                            });
                            $(this).dequeue();
                        });
                        musculo = false;
                    }else{
                        musculo = true;
                        $('.kmus').addClass('hide');
                    }
                    if($('#tmb').val()<0 ){
                        $('.tmb').removeClass('hide').delay(100).queue(function(){
                            $(this).addClass('animated shake').delay(1000).queue(function(){
                                $(this).removeClass('shake animated');
                                $(this).dequeue();
                            });
                            $(this).dequeue();
                        });
                        tmb     = false;
                    }else{
                        tmb = true;
                        $('.tmb').addClass('hide');
                    }                  
                    if(agua && grasa && musculo && tmb){
                        var guardando;
                        guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
                        $('.col-md-offset-2').html(guardando);
                        $.post(
                            "<?= base_url('intranet/insertar_mediciones'); ?>",
                            formulario.serialize(),
                            function(respuesta){
                                location.reload();
                        });
                    }
                });
                $('#ex6').change(function(event) {
                    var resultado;
                    var imc = $('#ex7').val()/($('#ex6').val()*$('#ex6').val());
                    if(imc < 16)
                        resultado = imc.toFixed(2) + " (IMC), Delgadez severa";
                    if(imc>=16 && imc<16.99)
                        resultado = imc.toFixed(2) + " (IMC), Delgadez moderada";
                    if(imc>=17 && imc<18.49)
                        resultado = imc.toFixed(2) + " (IMC), Delgadez aceptable";
                    if(imc>=18.50 && imc<24.99)
                        resultado = imc.toFixed(2) + " (IMC), Peso normal";
                    if(imc>=25 && imc<29.99)
                        resultado = imc.toFixed(2) + " (IMC), Sobrepeso";
                    if(imc>=30 && imc<34.99)
                        resultado = imc.toFixed(2) + " (IMC), Obesidad moderada";
                    if(imc>=35 && imc<39.99)
                        resultado = imc.toFixed(2) + " (IMC), Obesidad severa";
                    if(imc>=40)
                        resultado = imc.toFixed(2) + " (IMC), Obecidad morbida";
                    $('#imc').val(resultado);
                });
                $('#ex7').change(function(event) {
                   var resultado;
                    var imc = $('#ex7').val()/($('#ex6').val()*$('#ex6').val());
                    if(imc < 16)
                        resultado = imc.toFixed(2) + " (IMC), Delgadez severa";
                    if(imc>=16 && imc<16.99)
                        resultado = imc.toFixed(2) + " (IMC), Delgadez moderada";
                    if(imc>=17 && imc<18.49)
                        resultado = imc.toFixed(2) + " (IMC), Delgadez aceptable";
                    if(imc>=18.50 && imc<24.99)
                        resultado = imc.toFixed(2) + " (IMC), Peso normal";
                    if(imc>=25 && imc<29.99)
                        resultado = imc.toFixed(2) + " (IMC), Sobrepeso";
                    if(imc>=30 && imc<34.99)
                        resultado = imc.toFixed(2) + " (IMC), Obesidad moderada";
                    if(imc>=35 && imc<39.99)
                        resultado = imc.toFixed(2) + " (IMC), Obesidad severa";
                    if(imc>=40)
                        resultado = imc.toFixed(2) + " (IMC), Obecidad morbida";
                    $('#imc').val(resultado);
                });
                $('#ex8').change(function(){
                    var sexo = $('#sexo').val();
                    var riesgo = $('#ex8').val();
                    if(sexo == 'masculino'){
                        if(riesgo <= 95)
                            $('#riesgo').val("Sin riesgo");
                        else
                            if(riesgo > 95 && riesgo <=102)
                                $('#riesgo').val("Riesgo moderado");
                            else
                                $('#riesgo').val("Riesgo elevado");
                    }
                    else{
                        if(riesgo <= 82)
                            $('#riesgo').val("Sin riesgo");
                        if(riesgo > 82 && riesgo <=90)
                            $('#riesgo').val("Riesgo moderado");
                        if(riesgo > 90)
                            $('#riesgo').val("Riesgo elevado");
                    }

                })
            });
        </script>

        

    
