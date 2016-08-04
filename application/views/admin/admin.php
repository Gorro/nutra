	<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1 borde">
      <?php if($resultado) {?>
			<table class="table table-hover table-bordered ">
				<thead>
					<tr class="encabezado">
            <th>#</th>
						<th>Nombre</th>
			      <th>Edad</th>
			      <th>IMC</th>
			      <th>RCV</th>
			      <th>CF</th>
			      <th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($resultado->result() as $datos) { ?>
					<tr>
            <td><?php echo ++$inicio ?></td>
						<td><?php echo $datos->nombre; ?></td>
						<td class="text-center"><?php 
                      $fecha = $datos->fecha;
                      list($año, $mes, $dia) = explode('-', $fecha); 
                      $ano_diferencia  = date("Y") - $año;
                      $mes_diferencia = date("m") - $mes;
                      $dia_diferencia   = date("d") - $dia;
                      if ($dia_diferencia < 0 || $mes_diferencia < 0)
                          $ano_diferencia--; 
                      echo $ano_diferencia." años"; 	?></td>
						<td><?php echo $datos->imc; 	  ?></td>
						<td><?php echo $datos->riesgo; ?></td>
						<td><?php echo $datos->muneca; ?></td>
            <?php $mail = $datos->mail;?>
						<td><img src="<?php echo base_url() ?>bootstrap/css/images/profile29.png" alt="" class="tool" data-toggle="tooltip" data-placement="bottom" title="Ver datos del usuario" onclick="usuario('<?php echo $mail;?>','<?php echo base_url() ?>')"><img src="<?php echo base_url() ?>bootstrap/css/images/notes26.png" alt="" class="tool" data-toggle="tooltip" data-placement="bottom" title="Adjuntar informe" onclick="informe('<?php echo base_url("admin/informe_avanzado"); ?>','<?php echo $mail;?>')"><img src="<?php echo base_url() ?>bootstrap/css/images/round73.png" alt="" class="tool" data-toggle="tooltip" data-placement="bottom" title="Eliminar usuario" class="eliminar" onclick="eliminar('<?php echo $mail;?>','<?php echo $datos->nombre; ?>')"></td>
					</tr>
					<?php } ?>					
				</tbody>
			</table>
      <?php }else{ ?>
        <div class="alert alert-danger fade in" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>No existen usuarios registrados en el sistema :(</div>
		  <?php }?>
    </div>
	</div>
  <!--fin container-->
  <div class="center-block text-center">
    <?php echo $this->pagination->create_links(); ?>
  </div>
  <!--inicio modal usuario-->  
	<div class="modal fade" id="imagen_contextura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    	<div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            	<div class="modal-header">
                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                	<h4 class="modal-title" id="myModalLabel">Datos del usuario</h4>                
              	</div>
              	<div class="modal-body">
                  <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#datos" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Datos generales</a></li>
                        <li role="presentation"><a href="#antecedentes" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Antecedentes clínicos</a></li>
                        <li role="presentation"><a href="#estilo" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Estilo de vida</a></li>
                        <li role="presentation"><a href="#mediciones" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Mediciones</a></li>
                        <li role="presentation"><a href="#habitos" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Hábitos de alimentación</a></li>
                        <li role="presentation"><a href="#ejercicio" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Ejercicio físico</a></li>                      
                    </ul>
                  </div>
                  <div class="tab-content admin">
                    <div role="tabpanel" class="tab-pane fade in active" id="datos">
                      <div id="in-datos"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="antecedentes">
                      <div id="in-antecedentes"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="estilo">
                      <div id="in-estilo"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="mediciones">
                      <div id="in-mediciones"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="habitos">
                      <div id="in-habitos"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="ejercicio">
                      <div id="in-ejercicio"></div>
                    </div>
                  </div>
              	</div>
              	<div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              	</div>
            </div>
        </div>
    </div>
    <!--inicio modal archivo-->  
  <div class="modal fade" id="archivo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Adjuntar archivos</h4>                
                </div>
                <div class="modal-body">
                  <label class="control-label">Seleccionar archivo</label>
                  <input id="input-7" multiple type="file" class="file file-loading" data-allowed-file-extensions='["pdf", "txt"]'>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>    
    <script src="<?= base_url(); ?>bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>bootstrap/js/fileinput.js"></script>
    <script src="<?= base_url(); ?>bootstrap/js/fileinput_locale_es.js"></script> 
    <script>
      $('.tool').tooltip();
      var eliminar = function(mail,nombre){
        if(confirm("Se va a eliminar el usuario: "+nombre+", ¿desea continuar?"))
          $.post( "<?php echo base_url(); ?>admin/eliminar_datos",'mail='+mail,null, "json" )      
          .done(function( data) {
            alert(data.resultado);
            location.reload();
          });
        }
        var informe = function(url,mail){
           location.href = url+"/"+mail;
        }
      
    </script>   
    <script src="<?= base_url(); ?>bootstrap/js/admin.js"></script>
</body>
</html>