<div class="container top bottom">
	<div class="col-md-offset-2 col-md-8">
		<h2 class="text-center color">Ingreso de contraseña</h2>
		<hr>
		<h3 class="text-justify">Debe ingresar una contraseña entre 4 y 20 caracteres para poder seguir y descargar su plan de alientación.</h3>
		<br>
		<br>
		<div class="pass">
			<?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open('nutricion/form_pass',$attributes); 
			?>
			<!-- usuario -->
			<div class="form-group">
			    <label class="col-md-3"><p>Nombre de usuario</p></label>
			    <div class="col-md-9">         
				    <input type="text" class="form-control" name="nombre" id="mail" value="<?php echo $mail; ?>" disabled>
				</div>   
			</div>
			<!-- fin usuario -->
			<!-- pass -->
			<div class="form-group">
			    <label class="col-md-3"><p>Contraseña</p></label>
			    <div class="col-md-9">         
				    <input type="password" class="form-control" name="pass" id="pass" required placeholder="Ingrese su contraseña">
				    <?php echo form_error('pass','
					  	<div class="alert alert-warning alert-dismissible" role="alert">
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  	<span aria-hidden="true">&times;</span></button>','</div> '); ?>
				</div>			    
			</div>
			<!-- fin pass -->
			<br>
			<hr>
			<p class="text-justify">Esto le dará acceso a nuestro sistema de manera gratuita donde podrá ser evaluad@ por un profesional.</p>
			<br>
			<input class="btn btn-success pull-left" type="submit" value="Finalizar" />
			</form>
		</div>
	</div>
</div>
<script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap-slider.js"></script>
<script>
	$( document ).ready(function() {
		if(verificar())
			window.location = "<?= base_url(); ?>";
	});
	var verificar = function(){
		var flag = false;
		$.post(
	        "<?= base_url('intranet/buscar'); ?>",
	        {mail : $('#mail').val()},
	        function(respuesta){
	            if(respuesta){
	            	alert('mail ya existe');	            	
	                flag =true;
	                window.location = "<?= base_url(); ?>";
	            }
	            else{
	                flag = false;
	            }
	        }
	    );
	    return flag;
	}
</script>
