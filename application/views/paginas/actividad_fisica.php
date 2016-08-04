<div class="container top bottom">
	<div class="col-md-offset-2 col-md-8">
		<h2 class="text-center color">Ejercicio físico</h2>
		<hr>
		<?php
		$attributes = array('class' => 'form-horizontal');
		echo form_open('nutricion/form_fisica',$attributes); 
		?>
			<!-- INICIO ACTIVIDAD-->
			<div class="form-group">
				<label class="col-md-5"><p>¿Realiza algún tipo de ejercicio físico?</p></label>
			  	<div class="radio col-md-7">
			    	<label>
			      		<input type="radio" name="actividad" value="Si" id="fisica_si" required><p>Si</p>
			    	</label>
			     	<label>
			      		<input type="radio" name="actividad" value="No" id="fisica_no" required checked><p>No</p>
			    	</label>
		  		</div>
		  	</div>
		  	<!-- FIN ACTIVIDAD -->
		  	<!-- INICIO SEMANA -->
		  	<div class="form-group duracion visible trans1">
			    <label class="col-md-5"><p>¿Cuantos días a la semana?</p></label>
			    <div class="col-md-7"> 
		  			<input id="ex6" name="dias" type="text" data-slider-min="1" data-slider-max="7" data-slider-step="1" data-slider-value="4">
					<span id="ex6CurrentSliderValLabel"><span id="ex6SliderVal"> 4</span> Días.</span>
				</div>
			</div>
			<!-- FIN SEMANA -->
			<!-- INICIO TIEMPO -->
			<div class="form-group duracion visible trans1">
			    <label class="col-md-5"><p>¿Cuanto tiempo por día?</p></label>
			    <div class="col-md-7"> 
		  			<input id="ex7" name="tiempo" type="text" data-slider-min="1" data-slider-max="240" data-slider-step="1" data-slider-value="60">
					<span id="ex7CurrentSliderValLabel"><span id="ex7SliderVal"> 60</span> Min.</span>
				</div>
			</div>
			<!-- FIN TIEMPO -->
			<br>
			<input class="btn btn-success pull-left" type="submit" value="Siguiente" />
		</form>		
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
		$("#ex7").slider();
		$("#ex7").on("slide", function(slideEvt) {
			$("#ex7SliderVal").text(slideEvt.value);
		});
		$('#fisica_si').click(function(event) {
			$('.duracion').removeClass('visible');
		});
		$('#fisica_no').click(function(event) {
			$('.duracion').addClass('visible');
		});
	});
</script>