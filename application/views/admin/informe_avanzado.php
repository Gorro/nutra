<div class="container-fluid">
	<h2 class="text-center">Plan de alimentación</h2>
	<hr>
	<div class="col-md-6 col-md-offset-3">
		<div class="row">
			<form class="form-horizontal"  enctype="multipart/form-data" action="<?php echo base_url('admin/subir_archivos');?>" method="post" id="user">
				<!--INICIO DESAYUNO-->
                <div class="form-group">
                    <label class="col-md-2">Desayuno</label>
                    <div class="col-md-10">         
                        <input name="desayuno" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN DESAYUNO-->
            	<!--INICIO Colación-->
                <div class="form-group">
                    <label class="col-md-2">Colación</label>
                    <div class="col-md-10">         
                        <input name="colacion1" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Colación-->
            	<!--INICIO Almuerzo-->
                <div class="form-group">
                    <label class="col-md-2">Almuerzo</label>
                    <div class="col-md-10">         
                        <input name="almuerzo" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Almuerzo-->
            	<!--INICIO Media tarde-->
                <div class="form-group">
                    <label class="col-md-2">Media tarde</label>
                    <div class="col-md-10">         
                        <input name="meida_tarde" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Media tarde-->
            	<!--INICIO Colación-->
                <div class="form-group">
                    <label class="col-md-2">Colación</label>
                    <div class="col-md-10">         
                        <input name="colacion2" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Colación-->
            	<!--INICIO Comida nocturna-->
                <div class="form-group">
                    <label class="col-md-2">Comida nocturna</label>
                    <div class="col-md-10">         
                        <input name="comida_nocturna" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Comida nocturna-->
                <hr>
                <input type="submit" class="btn btn-success pull-rigth col-md-2 col-md-offset-10" value="enviar">
            </form>
		</div>
	</div>
	<div class="clearfix"></div>
	<h2 class="text-center">Plan de ejercicio</h2>
	<hr>
	<div class="col-md-6 col-md-offset-3">
		<div class="row">
			<form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="user">
				<!--INICIO Actividad-->
                <div class="form-group">
                    <label class="col-md-2">Actividad</label>
                    <div class="col-md-10">         
                        <input name="" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Actividad-->
            	<!--INICIO Lugar-->
                <div class="form-group">
                    <label class="col-md-2">Lugar</label>
                    <div class="col-md-10">         
                        <input name="" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Lugar-->
            	<!--INICIO Veces por semana-->
                <div class="form-group">
                    <label class="col-md-2">Veces por semana</label>
                    <div class="col-md-10">         
                        <input name="" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Veces por semana-->
            	<!--INICIO Tiempo por actividad-->
                <div class="form-group">
                    <label class="col-md-2">Tiempo por actividad</label>
                    <div class="col-md-10">         
                        <input name="" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Tiempo por actividad-->
            	<!--INICIO Intensidad-->
                <div class="form-group">
                    <label class="col-md-2">Intensidad</label>
                    <div class="col-md-10">         
                        <input name="" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Intensidad-->
            	<!--INICIO Calorias estimadas a quemar -->
                <div class="form-group">
                    <label class="col-md-2">Calorias estimadas a quemar </label>
                    <div class="col-md-10">         
                        <input name="" type="file" class="filestyle" data-buttonName="btn-primary">             
                    </div>
                </div>
            	<!--FIN Calorias estimadas a quemar -->
                <!-- Otro -->
                <div class="form-group">
                  <div class="col-md-12">         
                      <textarea type="text" class="form-control" name="otro" id="nombre" placeholder="Otra información"></textarea>            
                  </div>
                </div>
                <!-- Fin Otro -->
            </form>
		</div>
	</div>
</div>
<script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>    
<script src="<?= base_url(); ?>bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap-filestyle.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
    $(":file").filestyle();
    });
</script>
