<?php
	$imc = $peso/($estatura*$estatura);
	$imc = number_format($imc, 2, '.', '');
?>
<div class="container top " style="margin-bottom:200px;">
	<div class="col-md-offset-2 col-md-8">
		<h2 class="text-center color">Plan de alimentación</h2>
		<hr>
		<h3 class="text-justify">Descargue aquí su plan de alimentación deacuerdo a los datos generales
								obtenidos de sus mediciones ingresadas.
								<br><br>
								Recuerde que para obtener un plan personalizado y una evaluación completa
								de acuerdo a sus antecedentes debe agendar hora con un/a profesional nutricionista.</h3>
		<br>
		<a href="<?php if( $imc >=18.5 && $imc < 25 ) echo base_url("nutricion/decargar_archivo").'/REGIMEN_1600_CALORIAS.pdf';
					   else if( $imc >= 25 && $imc < 30) echo base_url("nutricion/decargar_archivo").'/REGIMEN_1400_CALORIAS.pdf';
					   else if( 30 < $imc) echo base_url("nutricion/decargar_archivo").'/REGIMEN_1200_CALORIAS.pdf';	 ?>">
					   <p class="btn btn-success pull-left btndescarga">Descargar tu plan de alimentación</p></a>
		<a href="<?php echo base_url(); ?>intranet"><p class="btn btn-success pull-left hide btnintranet">Ir a intranet</p></a></a>
		<div class="clearfix"></div>
		<hr>
	</div>
</div>
<script>
	 $( document ).ready(function(){
	 	$('.btndescarga').on('click',function(){
	 		$(this).addClass('hide');
	 		$('.btnintranet').removeClass('hide');
	 	});
	 });
</script>