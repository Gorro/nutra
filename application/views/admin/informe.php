<div class="container-fluid">
  <button type="button" class="btn btn-warning mail">Enviar notificación a usuario <span class="glyphicon glyphicon-envelope"></span></button>
  <br>
  <div class="clearfix"></div>
	<div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#datos" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Plan de alimentación</a></li>
            <li role="presentation"><a href="#antecedentes" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Plan de ejercicio</a></li>               
        </ul>
  </div>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="datos">
  		<div id="in-datos">	
  			<div class="col-md-12">
  				<?php $Formulario = array('desayuno','colacion','almuerzo','media_tarde','colacion2','comida_nocturna','colacion3');
  					foreach ($Formulario as $datos) {?>
  				<div class="row">
  					<div class="col-md-2">
  						<p class='pe titulo'>
  							<?php if($datos=="colacion2" || $datos=="colacion3" || $datos=="colacion")echo "Colación"; else echo ucwords(str_replace('_',' ',$datos)); ?>:
  						</p>
  					</div>
  					<div class="col-md-1">
  						<p class="btn btn-success pe" onclick="formulario('<?php echo $datos; ?>_a')">Agregar Archivo</p>
  					</div>						
  					<div class="col-md-1">
  						<p class="pe btn btn-info" onclick="mostrar_archivos('<?php echo $datos; ?>')">Ver archivos</p>
  					</div>
  					<div class="col-md-1">
  						<p Class="pe text-center">
                        <?php if($datos=='desayuno')        echo $numero = $desayuno;
  														if($datos=='colacion')        echo $numero = $colacion;
  														if($datos=='almuerzo')        echo $numero = $almuerzo;
  														if($datos=='media_tarde')     echo $numero = $media_tarde;
  														if($datos=='colacion2')       echo $numero = $colacion2;
  														if($datos=='comida_nocturna') echo $numero = $comida_nocturna;
                              if($datos=='colacion3')       echo $numero = $colacion3;
  												  ?> 
  						<br> <?php echo ($numero!=1)? "Archivos":"Archivo";?>
  						</p>
  					</div>
  					<div class="clearfix"></div>
  					<br>
  					<form enctype="multipart/form-data" action="" method="post" class="form-horizontal hide" id="<?php echo $datos; ?>_a">
  						<div class="col-md-4">
  							<input name="archivo" type="file" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar archivo" data-buttonBefore="true" data-placeholder="Adjunte archivo" onchange="validar(this)">
  							<input type="hidden" name="tipo_comida" value="<?php echo $datos; ?>">
  							<input id="mail" type="hidden" name="user" value="<?php echo $mail; ?>">
  						</div>
  						<input type="submit" value="Subir archivo" class="btn btn-default">
  					</form>
  					<br>
  					<hr>
  				</div>						
  				<?php } ?> 
  			</div>      	
  		</div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="antecedentes">
    	<div id="in-antecedentes">
    		<form enctype="multipart/form-data" action="" method="post" class="form-horizontal" id="ejercicio">
    			<br>
    			<div class="form-group">
            <label class="col-md-2">Actividad</label>
            <div class="col-md-5">         
                <input type="text" class="form-control" name="actividad" id="nombre" placeholder="Ingrese actividad" required value="<?php if(isset($actividad)) echo $actividad; ?>">             
            </div>
          </div>
          <div class="form-group">
              <label class="col-md-2">Lugar</label>
              <div class="col-md-5">         
                  <input type="text" class="form-control" name="lugar" id="nombre" placeholder="Ingrese lugar" required value="<?php if(isset($lugar)) echo $lugar; ?>">             
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2">Veces por semana</label>
              <div class="col-md-5">         
                  <input type="text" class="form-control" name="veces" id="nombre" placeholder="Ingrese veces por semana" required value="<?php if(isset($veces)) echo $veces; ?>">             
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2">Tiempo por actividad</label>
              <div class="col-md-5">         
                  <input type="text" class="form-control" name="tiempo" id="nombre" placeholder="Ingrese tiempo por actividad" required value="<?php if(isset($tiempo)) echo $tiempo; ?>">             
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2">intensidad</label>
              <div class="col-md-5">         
                  <input type="text" class="form-control" name="intensidad" id="nombre" placeholder="Ingrese intensidad" required value="<?php if(isset($intensidad)) echo $intensidad; ?>">             
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-2">Calorias estimadas a quemar</label>
              <div class="col-md-5">         
                  <input type="text" class="form-control" name="calorias" id="nombre" placeholder="Ingrese calorias estimadas a quemar" required value="<?php if(isset($calorias)) echo $calorias; ?>">             
              </div>
          </div>
          <!-- Otro -->
          <div class="form-group">
            <div class="col-md-10">         
                <textarea type="text" class="form-control" name="otro" id="nombre" placeholder=""><?php if(isset($otro)) echo $otro; ?></textarea>            
            </div>
          </div>
          <!-- Fin Otro -->
          <div class="col-md-7"> 
            <input id="mail" type="hidden" name="mail" value="<?php echo $mail; ?>">       
            <input type="submit" class="btn btn-success center-block" value="Guardar">
          </div>
    		</form>
    	</div>
    </div>
  </div>
</div>
</div>
<!--inicio modal-->
<div class="modal fade" id="archivos_desayuno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
          	</div>
          	<div class="modal-body">
              <table class="archivo table table-striped">
              	<tr>
              		<th>Nombre Archivo</th>
              		<th>Tipo</th>
              		<th class="text-center">Eliminar</th>
              	</tr>
              	<?php if($archivos_desayuno) foreach ($archivos_desayuno->result() as $datos) {?>
              	<tr>
              		<td><?php echo $datos->nombre_archivo; ?></td>
              		<td><?php if($datos->tipo == 'pdf') echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; else echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >"; ?></td>
              		<td class="text-center"><img src="<?php echo base_url() ?>bootstrap/css/images/cancel22.png" onclick="eliminar('<?php echo $datos->nombre_archivo; ?>','<?php echo $mail; ?>')"></td>
              	</tr>

				      <?php }else echo '<td colspan="3">No existen archivos para mostrar</td>' ?>
              </table>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          	</div>
        </div>
    </div>
</div>
<!--inicio modal-->
<div class="modal fade" id="archivos_colacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
          	</div>
          	<div class="modal-body">
              <table class="archivo table table-striped">
              	<tr>
              		<th>Nombre Archivo</th>
              		<th>Tipo</th>
              		<th class="text-center">Eliminar</th>
              	</tr>
              	<?php if($archivos_colacion) foreach ($archivos_colacion->result() as $datos) {?>
              	<tr>
              		<td><?php echo $datos->nombre_archivo; ?></td>
              		<td><?php if($datos->tipo == 'pdf') echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; else echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >"; ?></td>
              		<td class="text-center"><img src="<?php echo base_url() ?>bootstrap/css/images/cancel22.png" onclick="eliminar('<?php echo $datos->nombre_archivo; ?>','<?php echo $mail; ?>')"></td>
              	</tr>

				<?php }else echo '<td colspan="3">No existen archivos para mostrar</td>' ?>
              </table>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          	</div>
        </div>
    </div>
</div>
<!--inicio modal-->
<div class="modal fade" id="archivos_almuerzo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
          	</div>
          	<div class="modal-body">
              <table class="archivo table table-striped">
              	<tr>
              		<th>Nombre Archivo</th>
              		<th>Tipo</th>
              		<th class="text-center">Eliminar</th>
              	</tr>
              	<?php if($archivos_almuerzo) foreach ($archivos_almuerzo->result() as $datos) {?>
              	<tr>
              		<td><?php echo $datos->nombre_archivo; ?></td>
              		<td><?php if($datos->tipo == 'pdf') echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; else echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >"; ?></td>
              		<td class="text-center"><img src="<?php echo base_url() ?>bootstrap/css/images/cancel22.png" onclick="eliminar('<?php echo $datos->nombre_archivo; ?>','<?php echo $mail; ?>')"></td>
              	</tr>

				<?php }else echo '<td colspan="3">No existen archivos para mostrar</td>' ?>
              </table>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          	</div>
        </div>
    </div>
</div>
<!--inicio modal-->
<div class="modal fade" id="archivos_media_tarde" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
          	</div>
          	<div class="modal-body">
              <table class="archivo table table-striped">
              	<tr>
              		<th>Nombre Archivo</th>
              		<th>Tipo</th>
              		<th class="text-center">Eliminar</th>
              	</tr>
              	<?php if($archivos_media_tarde) foreach ($archivos_media_tarde->result() as $datos) {?>
              	<tr>
              		<td><?php echo $datos->nombre_archivo; ?></td>
              		<td><?php if($datos->tipo == 'pdf') echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; else echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >"; ?></td>
              		<td class="text-center"><img src="<?php echo base_url() ?>bootstrap/css/images/cancel22.png" onclick="eliminar('<?php echo $datos->nombre_archivo; ?>','<?php echo $mail; ?>')"></td>
              	</tr>

				        <?php }else echo '<td colspan="3">No existen archivos para mostrar</td>' ?>
              </table>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          	</div>
        </div>
    </div>
</div>
<!--inicio modal-->
<div class="modal fade" id="archivos_colacion2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
          	</div>
          	<div class="modal-body">
              <table class="archivo table table-striped">
              	<tr>
              		<th>Nombre Archivo</th>
              		<th>Tipo</th>
              		<th class="text-center">Eliminar</th>
              	</tr>
              	<?php if($archivos_colacion2) foreach ($archivos_colacion2->result() as $datos) {?>
              	<tr>
              		<td><?php echo $datos->nombre_archivo; ?></td>
              		<td><?php if($datos->tipo == 'pdf') echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; else echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >"; ?></td>
              		<td class="text-center"><img src="<?php echo base_url() ?>bootstrap/css/images/cancel22.png" onclick="eliminar('<?php echo $datos->nombre_archivo; ?>','<?php echo $mail; ?>')"></td>
              	</tr>

				<?php }else echo '<td colspan="3">No existen archivos para mostrar</td>' ?>
              </table>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          	</div>
        </div>
    </div>
</div>
<!--inicio modal-->
<div class="modal fade" id="archivos_comida_nocturna" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
          	</div>
          	<div class="modal-body">
              <table class="archivo table table-striped">
              	<tr>
              		<th>Nombre Archivo</th>
              		<th>Tipo</th>
              		<th class="text-center">Eliminar</th>
              	</tr>
              	<?php if($archivos_comida_nocturna) foreach ($archivos_comida_nocturna->result() as $datos) {?>
              	<tr>
              		<td><?php echo $datos->nombre_archivo; ?></td>
              		<td><?php if($datos->tipo == 'pdf') echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; else echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >"; ?></td>
              		<td class="text-center"><img src="<?php echo base_url() ?>bootstrap/css/images/cancel22.png" onclick="eliminar('<?php echo $datos->nombre_archivo; ?>','<?php echo $mail; ?>')"></td>
              	</tr>

				      <?php }else echo '<td colspan="3">No existen archivos para mostrar</td>' ?>
              </table>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          	</div>
        </div>
    </div>
</div>
<div class="modal fade" id="archivos_colacion3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
            </div>
            <div class="modal-body">
              <table class="archivo table table-striped">
                <tr>
                  <th>Nombre Archivo</th>
                  <th>Tipo</th>
                  <th class="text-center">Eliminar</th>
                </tr>
                <?php if($archivos_colacion3) foreach ($archivos_colacion3->result() as $datos) {?>
                <tr>
                  <td><?php echo $datos->nombre_archivo; ?></td>
                  <td><?php if($datos->tipo == 'pdf') echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; else echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >"; ?></td>
                  <td class="text-center"><img src="<?php echo base_url() ?>bootstrap/css/images/cancel22.png" onclick="eliminar('<?php echo $datos->nombre_archivo; ?>','<?php echo $mail; ?>')"></td>
                </tr>

              <?php }else echo '<td colspan="3">No existen archivos para mostrar</td>' ?>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>    
<script src="<?= base_url(); ?>bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap-filestyle.js"></script>
<script>
var tipo_archivo;
	$( document ).ready(function() {
    	$(":file").filestyle();
    	var formulario = $('#desayuno_a');
        formulario.on('submit',function(e){        	
    		e.preventDefault();
    		if(tipo_archivo=='imagen'){
    			tipo_archivo = '';
    			enviar_imagen('desayuno_a');
    		}
    		if(tipo_archivo=='pdf'){
    			tipo_archivo = '';
    			enviar_pdf('desayuno_a');
    		}    		 
    	});
        var formulario = $('#colacion_a');
        formulario.on('submit',function(e){
        	e.preventDefault();
        	if(tipo_archivo=='imagen'){
    			tipo_archivo = '';
    			enviar_imagen('colacion_a');
    		}
    		if(tipo_archivo=='pdf'){
    			tipo_archivo = '';
    			enviar_pdf('colacion_a');
    		} 
        });
        var formulario = $('#almuerzo_a');
        formulario.on('submit',function(e){
        	e.preventDefault(); 
    		if(tipo_archivo=='imagen'){
    			tipo_archivo = '';
    			enviar_imagen('almuerzo_a');
    		}
    		if(tipo_archivo=='pdf'){
    			tipo_archivo = '';
    			enviar_pdf('almuerzo_a');
    		}  
        });
        var formulario = $('#media_tarde_a');
        formulario.on('submit',function(e){
        	e.preventDefault();
        	if(tipo_archivo=='imagen'){
    			tipo_archivo = '';
    			enviar_imagen('media_tarde_a');
    		}
    		if(tipo_archivo=='pdf'){
    			tipo_archivo = '';
    			enviar_pdf('media_tarde_a');
    		} 
        });
        var formulario = $('#colacion2_a');
        formulario.on('submit',function(e){
        	e.preventDefault(); 
    		if(tipo_archivo=='imagen'){
    			tipo_archivo = '';
    			enviar_imagen('colacion2_a');
    		}
    		if(tipo_archivo=='pdf'){
    			tipo_archivo = '';
    			enviar_pdf('colacion2_a');
    		}   
        });
        var formulario = $('#comida_nocturna_a');
        formulario.on('submit',function(e){
        	e.preventDefault();
        	if(tipo_archivo=='imagen'){
    			tipo_archivo = '';
    			enviar_imagen('comida_nocturna_a');
      		}
      		if(tipo_archivo=='pdf'){
      			tipo_archivo = '';
      			enviar_pdf('comida_nocturna_a');
      		} 
          });
        var formulario = $('#colacion3_a');
        formulario.on('submit',function(e){
          e.preventDefault();
          if(tipo_archivo=='imagen'){
          tipo_archivo = '';
          enviar_imagen('colacion3_a');
          }
          if(tipo_archivo=='pdf'){
            tipo_archivo = '';
            enviar_pdf('colacion3_a');
          } 
          });
        var formulario = $('#ejercicio');
        formulario.on('submit',function(e){
          e.preventDefault();
          $.post(
            "<?= base_url('admin/ingresar_ejercicio'); ?>",
            formulario.serialize(),
            function(respuesta){             
              location.reload();
            });
          });
        $('.mail').on('click',function(){
          $.post(
            "<?= base_url('admin/enviar_mail'); ?>",
            {'mail':'<?php echo $mail; ?>'},
            function(respuesta){
                alert('Email enviado a usuario: <?php echo $mail; ?>');
          }); 
        });
    });
	formulario = function(id){
		id = '#'+ id;
		$("form").addClass('hide');
		$(id).removeClass('hide');
	}
	mostrar_archivos = function(tipo_comida){
		tipo_comida = '#archivos_'+tipo_comida;
		$(tipo_comida).modal({show:true})
	}
	enviar_imagen = function(id){
		var formData = new FormData(document.getElementById(id));
    	$.ajax({
        url: "<?php echo base_url('admin/subir_imagen');?>",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
     	processData: false,
     	beforeSend: function(){
     		 cargando = '<div class="guardar"><h2 class="text-center">Subiendo archivo</h2><img src="<?php echo base_url();?>bootstrap/css/images/box.gif" alt="Cargando datos" class="center-block"/></div>';
     		$('.container-fluid').html(cargando);
     	},
     	error: function(){
     		alert('Ha ocurrido un error al enviar los datos.');
     	}
        }).done(function(res){
        	if(res!='') alert(res);        	
        	location.reload();

        }).always(function(){
        });

	}
	enviar_pdf = function(id){
		var formData = new FormData(document.getElementById(id));
    	$.ajax({
        url: "<?php echo base_url('admin/subir_pdf');?>",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
     	processData: false,
     	beforeSend: function(){
     		 cargando = '<div class="guardar"><h2 class="text-center">Subiendo archivo</h2><img src="<?php echo base_url();?>bootstrap/css/images/box.gif" alt="Cargando datos" class="center-block"/></div>';
     		$('.container-fluid').html(cargando);
     	},
     	error: function(){
     		alert('Ha ocurrido un error al enviar los datos.');
     	}
        }).done(function(res){
        	if(res!='') alert(res);   	
        	location.reload();
        }).always(function(){
        });

	}
	validar = function(archivo){
		tipo = archivo.value.split('.');
		if(!(tipo[(tipo.length-1)]=='gif' || tipo[(tipo.length-1)]=='jpg' || tipo[(tipo.length-1)]=='png' || tipo[(tipo.length-1)]=='PNG' || tipo[(tipo.length-1)]=='pdf' || tipo[(tipo.length-1)]=='jpeg')){
			alert('Archivo seleccionado no es permitido');
			$(":file").filestyle('clear');
		}
		else
			if(tipo[(tipo.length-1)]=='gif' || tipo[(tipo.length-1)]=='jpg' || tipo[(tipo.length-1)]=='png' || tipo[(tipo.length-1)]=='PNG' || tipo[(tipo.length-1)]=='jpeg')
				tipo_archivo = 'imagen';
			if(tipo[(tipo.length-1)]=='pdf')
				tipo_archivo = 'pdf';
	}
  var eliminar = function(nombre,mail){
        if(confirm("Se va a eliminar el archivo: "+nombre+", ¿desea continuar?"))
          $.post( "<?php echo base_url(); ?>admin/eliminar_archivos",{'nombre':nombre,'mail':mail},null, null )      
          .done(function( data) {
            location.reload();
          });
        }
</script>