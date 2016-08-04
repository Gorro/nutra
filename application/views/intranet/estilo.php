<div id="page-wrapper">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-offset-1 col-md-8">
                <h1 class="text-center">Estilo de vida</h1>
                <hr>
                <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="form">
                    <!--INICIO INGRESO NOMBRE-->
                    <div class="form-group">
                        <label class="col-md-3">Actividad laboral</label>
                        <div class="col-md-9">         
                            <input type="text" class="form-control" name="ocupacion" id="nombre" placeholder="Ingrese su ocupación" <?php if(isset($ocupacion)) echo "value='$ocupacion'" ; ?> required>             
                        </div>
                    </div>
                    <!--FIN NOMBRE-->
                    <!--INICIO INGRESO DESCRIPCION-->
                    <div class="form-group">
                        <label class="col-md-3">Descripción de la actividad laboral</label>
                        <div class="col-md-9"> 
                            <textarea type="text" class="form-control" name="descripcion_actividad" rows="5" placeholder="Ingrese la descripción de la actividad laboral"><?php if(isset($descripcion_actividad)) echo $descripcion_actividad; ?></textarea>
                        </div>
                    </div>
                    <!--FIN DESCRIPCION-->
                    <!--INICIO INGRESO DESCRIPCION-->
                    <div class="form-group">
                        <label class="col-md-3">¿Realiza actividades recreativas?</label>
                        <div class="col-md-9">
                            <label>
                                <input type="radio" name="recreativas" value="Si" id="recreativas_si" required <?php if(isset($recreativas) and strcmp($recreativas,'Si')==0) echo 'checked'?>> Si
                            </label>
                            <label>
                                <input type="radio" name="recreativas" value="No" id="recreativas_no" required <?php if(isset($recreativas) and strcmp($recreativas,'No')==0) echo 'checked'; else if(!isset($recreativas)) echo 'checked';?>> No
                            </label>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="col-md-12">
                            <textarea type="text" class="form-control trans1 <?php if(isset($recreativas) and strcmp($recreativas,'No')==0) echo 'hide visible';?>" name="recreativas_si" id="recreativas_text" rows="5" placeholder="Ingrese actividad recreativa"><?php if(isset($recreativas_si)) echo $recreativas_si; ?></textarea>
                        </div>
                    </div>
                    <!--FIN DESCRIPCION-->
                    <!-- INICIO TENDENCIA-->
                    <div class="form-group">
                        <label class="col-md-3">Tendencia alimentaria</label>
                        <div class="radio col-md-9">
                            <label>
                                <input type="radio" name="tendencia" value="Vegetariano" class="si" required <?php if(isset($tendencia)) if(strcmp($tendencia, 'Vegetariano')==0) echo "checked" ; ?>> Vegetariana/o
                            </label>
                            <label>
                                <input type="radio" name="tendencia" value="Vegano" class="si" required <?php if(isset($tendencia)) if(strcmp($tendencia, 'Vegano')==0) echo "checked" ; ?>> Vegana/o
                            </label>   
                            <label>
                                <input type="radio" name="tendencia" value="Otra" id="otra" required <?php if(isset($tendencia)) if(strcmp($tendencia, 'Vegano')!=0 and strcmp($tendencia, 'Vegetariano')!=0) echo "checked" ; ?>> Otra
                            </label>                                  
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="col-md-12">
                        	<textarea type="text" class="form-control <?php if(!isset($tendencia) or (strcmp($tendencia,'Vegetariano')==0 or strcmp($tendencia,'Vegano')==0))  echo "hide visible" ; ?> trans1" name="otendencia" id="tendencia" rows="5" placeholder="Ingrese su tedencia alimentaria"><?php if(isset($tendencia) and (strcmp($tendencia, 'Vegano')!=0 and strcmp($tendencia, 'Vegetariano')!=0)) echo $tendencia; ?></textarea>
                        </div>
                    </div>
                    <!-- FIN TENDENCIA -->
                    <!-- INICIO FUMA -->
                    <div class="form-group">
                        <label class="col-md-3">¿Fuma?</label>
                        <div class="radio col-md-9">
                            <label>
                                <input type="radio" name="fuma" id="fuma_si" value="Si" required <?php if(isset($fuma)) if(strcmp($fuma, 'Si')==0) echo "checked" ; ?>> Si
                            </label>
                            <label>
                                <input type="radio" name="fuma" id="fuma_no"value="No" required <?php if(isset($fuma)){ if(strcmp($fuma, 'No')==0) echo "checked" ;} else echo "checked" ?>> No
                            </label>                                
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="cigarros_esconder trans1 <?php if(isset($fuma) and strcmp($fuma,'No')==0) echo 'hide visible';?>">
                            <label class="col-md-3">Número de cigarros por día</label>
                            <div class="col-md-9">         
                                <input type="text" class="form-control cigarrosR" name="cigarros" placeholder="Ingrese número de cigarros" value="<?php if(isset($cigarros)) echo $cigarros;?>">
                            </div>
                            <div class="clearfix"></div>
                            <br> 
                            <label class="col-md-3">Cantidad de veces</label>
                            <div class="col-md-4">         
                                <input type="text" class="form-control cigarrosR" name="cantidad_cigarros" placeholder="Ingrese cantidad de veces" value="<?php if(isset($cantidad_cigarros)) echo $cantidad_cigarros;?>">
                            </div>                        
                            <label class="col-md-5">(ejemplo: 3 veces a la semana/mes)</label>
                        </div>                     
                    </div>   
                    <!-- FIN FUMA -->      
                     <!-- INICIO ALCOHOL -->
                    <div class="form-group">
                        <label class="col-md-3">¿Consume alcohol?</label>
                        <div class="radio col-md-9">
                            <label>
                                <input type="radio" name="alcohol" value="Si" id="alcohol_si" <?php if(isset($alcohol)) if(strcmp($alcohol, 'Si')==0) echo "checked" ; ?>> Si
                            </label>
                            <label>
                                <input type="radio" name="alcohol" value="No" id="alcohol_no" <?php if(isset($alcohol)){ if(strcmp($alcohol, 'No')==0) echo "checked" ;} else echo "checked" ?>> No
                            </label>                                 
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="esconder_vasos trans1 <?php if(isset($alcohol) and strcmp($alcohol,'No')==0) echo 'hide visible';?>">
                            <label class="col-md-3">Número de vasos</label>
                            <div class="col-md-9">         
                                <input type="text" class="form-control alcoholR" name="vasos" placeholder="Ingrese número de vasos" value="<?php if(isset($vasos)) echo $vasos;?>">
                            </div>
                            <div class="clearfix"></div>
                            <br> 
                            <label class="col-md-3">Cantidad de veces</label>
                            <div class="col-md-4">         
                                <input type="text" class="form-control alcoholR" name="veces_vasos" placeholder="Ingrese cantidad de veces" value="<?php if(isset($veces_vasos)) echo $veces_vasos;?>">
                            </div>
                            <label class="col-md-5">(ejemplo: 3 veces a la día/semana/mes)</label>
                        </div>                        
                    </div>   
                    <!-- FIN ALCOHOL -->         
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
	$( document ).ready(function() {
        var formulario = $('#form');
        formulario.on('submit',function(e){
            e.preventDefault();
            var guardando;
            guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
            $('.col-md-offset-1').html(guardando);
            $.post(
                "<?= base_url('intranet/insertar_estilo'); ?>",
                formulario.serialize(),
                function(respuesta){
                    location.reload();
                }
            );
        });
		var i;
        for(i=0;i<10;i++)
            $(".menu_nutra li").eq(i).removeClass('active');   
        $(".menu_nutra li").eq(2).addClass('active');
        $('#otra').click(function(){
        	$('#tendencia').removeClass('hide').delay(100).queue(function(){
				$(this).removeClass('visible');
				$('#tendencia').attr('required', '');
				$(this).dequeue();
			});
		});
		$('.si').click(function(){
			$('#tendencia').addClass('visible').delay(700).queue(function(){
				$(this).addClass('hide');
				$('#tendencia').removeAttr('required');
				$(this).dequeue();
			});
		});
        $('#fuma_si').click(function(){
            $('.cigarros_esconder').removeClass('hide').delay(100).queue(function(){
                $(this).removeClass('visible');
                $('.cigarrosR').attr('required', '');
                $(this).dequeue();
            });
        });;
        $('#fuma_no').click(function(){
            $('.cigarros_esconder').addClass('visible').delay(700).queue(function(){
                $(this).addClass('hide');
                $('.cigarrosR').removeAttr('required').val("");
                $(this).dequeue();
            });
        });
        $('#alcohol_si').click(function(){
            $('.esconder_vasos').removeClass('hide').delay(100).queue(function(){
                $(this).removeClass('visible');
                $('.alcoholR').attr('required', '');
                $(this).dequeue();
            });
        });;
        $('#alcohol_no').click(function(){
            $('.esconder_vasos').addClass('visible').delay(700).queue(function(){
                $(this).addClass('hide');
                $('.alcoholR').removeAttr('required').val("");
                $(this).dequeue();
            });
        });
        $('#recreativas_si').click(function(){
            $('#recreativas_text').removeClass('hide').delay(100).queue(function(){
                $(this).removeClass('visible');
                $('#recreativas_text').attr('required', '');
                $(this).dequeue();
            });
        });;
        $('#recreativas_no').click(function(){
            $('#recreativas_text').addClass('visible').delay(700).queue(function(){
                $(this).addClass('hide');
                $('#recreativas_text').removeAttr('required').val("");
                $(this).dequeue();
            });
        });
	});
</script>