<div class="container top bottom" >
	<div class="load"></div>
	<div class="col-md-offset-2 col-md-8">
		<h2  class="text-center color">Ingreso mediciones</h2>
		<hr>
				
		<form class="form-horizontal"  enctype="multipart/form-data" action="<?php echo base_url(); ?>nutricion/form_mediciones" method="post" id="form">                       
            <!-- INICIO ESTATURA -->
            <div class="form-group">
                <label class="col-md-4">Estatura</label>
                <div class="col-md-8"> 
                    <input name="estatura" id="ex6" type="text" data-slider-min="1.30" data-slider-max="2.30" data-slider-step="0.01" data-slider-value="<?php if(isset($estatura)) echo $estatura; else echo 1.70; ?>" >
                    <span id="ex6CurrentSliderValLabel"><span id="ex6SliderVal"> 1.70</span> mts.</span>
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
                    <span id="ex7CurrentSliderValLabel"><span id="ex7SliderVal"> 60</span> kg.</span>
                </div>
            </div>                            
            <div class="clearfix"></div>
            <br>
            <!-- FIN PESO -->
            <!--INICIO imc-->
            <div class="form-group">
                <label class="col-md-4">Índice de masa corporal (IMC)</label>
                <div class="col-md-5">         
                    <input type="text" class="form-control" name="imc" value="" id='imc' disabled> 
                </div>
            </div>
            <!--FIN imc-->
            <!-- INICIO CINTURA -->
            <div class="form-group">
                <label class="col-md-4">Circunferencia de cintura <button type="button" class="btn btn-default mostrar-imagen" >?</button></label>
                <div class="col-md-8"> 
                    <input name="cintura" id="ex8" type="text" data-slider-min="20" data-slider-max="200" data-slider-step="1" data-slider-value="<?php if(isset($cintura)) echo $cintura; else echo '50'; ?>">
                    <span id="ex8CurrentSliderValLabel"><span id="ex8SliderVal"> 50</span> cm.</span>
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
                        <input type="radio" name="muneca" value="Pequeña" required > 
                    </label>
                    <label id="mediana" class="medidas">
                        <input type="radio" name="muneca" value="Mediana" required > 
                    </label>
                    <label id="grande" class="medidas">
                        <input type="radio" name="muneca" value="Grande" required > 
                    </label>                
                </div>
            </div>
            <!-- FIN HUESOS -->            
            <input type="hidden" id="sexo" name="sexo" value="<?php echo $sexo; ?>">
            <input class="btn btn-success pull-left" type="submit" value="Siguiente" />
        </form>		
	</div>
</div>
<!--inicio modal-->
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
<!--inicio modal-->
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
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap-filestyle.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/imagen.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap-slider.js"></script>
<script>
	$( document ).ready(function() {
		$("#ex6").slider();
        $("#ex6").on("slide", function(slideEvt) {
            $("#ex6SliderVal").text(slideEvt.value);
        });
        $("#ex7").slider({tooltip_position:'bottom'});
        $("#ex7").on("slide", function(slideEvt) {
            $("#ex7SliderVal").text(slideEvt.value);
        });
        $("#ex8").slider({tooltip_position:'bottom'});
        $("#ex8").on("slide", function(slideEvt) {
            $("#ex8SliderVal").text(slideEvt.value);
        });
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