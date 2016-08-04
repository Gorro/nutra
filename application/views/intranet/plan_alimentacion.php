<div id="page-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-md-offset-1 col-md-8">
                        <div role="tabpanel">
                        	<ul class="nav nav-tabs" role="tablist">
					            <li role="presentation" class="active"><a href="#plan" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Plan de alimentación</a></li>
					            <li role="presentation"><a href="#ejercicio" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Plan de ejercicio</a></li>
					        </ul>                        	
                        </div> 
                        <div class="tab-content">
						    <div role="tabpanel" class="tab-pane fade in active" id="plan">
						    	<h1 class="text-center">Archivos Nutricionales</h1>
                        		<hr>
						    	<div role="tabpanel">
							        <ul class="nav nav-tabs" role="tablist">
							            <li role="presentation" class="active"><a href="#desayuno" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Desayuno</a></li>
							            <li role="presentation"><a href="#colacion" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Colación</a></li>
							            <li role="presentation"><a href="#almuerzo" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Almuerzo</a></li>         
							            <li role="presentation"><a href="#media" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Media tarde</a></li>         
							            <li role="presentation"><a href="#colacion2" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Colación</a></li>         
							            <li role="presentation"><a href="#nocturna" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Comida nocturna</a></li>
							            <li role="presentation"><a href="#colacion3" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Colación</a></li>                      
							        </ul>
							  	</div>
							  	<div class="tab-content">
								    <div role="tabpanel" class="tab-pane fade in active" id="desayuno">
								  		<table class="archivo table table-striped">
							              	<tr>
							              		<th>Nombre Archivo</th>
							              		<th>Tipo</th>
							              		<th class="text-center">Descargar archivo</th>
							              	</tr>
							              	<?php llenar_tabla($archivos_desayuno) ?>				              	
							            </table>	
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="colacion">
								    	<table class="archivo table table-striped">
							              	<tr>
							              		<th>Nombre Archivo</th>
							              		<th>Tipo</th>
							              		<th class="text-center">Descargar archivo</th>
							              	</tr>
							              	<?php llenar_tabla($archivos_colacion) ?>
							            </table>
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="almuerzo">
								    	<table class="archivo table table-striped">
							              	<tr>
							              		<th>Nombre Archivo</th>
							              		<th>Tipo</th>
							              		<th class="text-center">Descargar archivo</th>
							              	</tr>
							              	<?php llenar_tabla($archivos_almuerzo) ?>
							            </table>
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="media">
								    	<table class="archivo table table-striped">
							              	<tr>
							              		<th>Nombre Archivo</th>
							              		<th>Tipo</th>
							              		<th class="text-center">Descargar archivo</th>
							              	</tr>
							              	<?php llenar_tabla($archivos_media_tarde) ?>
							            </table>
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="colacion2">
								    	<table class="archivo table table-striped">
							              	<tr>
							              		<th>Nombre Archivo</th>
							              		<th>Tipo</th>
							              		<th class="text-center">Descargar archivo</th>
							              	</tr>
							              	<?php llenar_tabla($archivos_colacion2) ?>
							            </table>
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="nocturna">
								    	<table class="archivo table table-striped">
							              	<tr>
							              		<th>Nombre Archivo</th>
							              		<th>Tipo</th>
							              		<th class="text-center">Descargar archivo</th>
							              	</tr>
							              	<?php llenar_tabla($archivos_comida_nocturna) ?>
							            </table>
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="colacion3">
								    	<table class="archivo table table-striped">
							              	<tr>
							              		<th>Nombre Archivo</th>
							              		<th>Tipo</th>
							              		<th class="text-center">Descargar archivo</th>
							              	</tr>
							              	<?php llenar_tabla($archivos_colacion3) ?>
							            </table>
								    </div>
								</div> 
						    </div>
						    <div role="tabpanel" class="tab-pane fade" id="ejercicio">
						    	<h1 class="text-center">Plan de ejercicio</h1>
		                        <hr>
		                        <form action="" class="form-horizontal" id="ejercicio" >
		                            <br>
		                            <div class="form-group">
		                                <label class="col-md-4">Actividad</label>
		                                <div class="col-md-7">         
		                                    <input type="text" class="form-control" name="actividad" id="nombre" placeholder="Sin información" required value="<?php if(isset($actividad)) echo $actividad; ?>" disabled>             
		                                </div>
		                              </div>
		                              <div class="form-group">
		                                  <label class="col-md-4">Lugar</label>
		                                  <div class="col-md-7">         
		                                      <input type="text" class="form-control" name="lugar" id="nombre" placeholder="Sin información" required value="<?php if(isset($lugar)) echo $lugar; ?>" disabled>             
		                                  </div>
		                              </div>
		                              <div class="form-group">
		                                  <label class="col-md-4">Veces por semana</label>
		                                  <div class="col-md-7">         
		                                      <input type="text" class="form-control" name="veces" id="nombre" placeholder="Sin información" required value="<?php if(isset($veces)) echo $veces; ?>" disabled>             
		                                  </div>
		                              </div>
		                              <div class="form-group">
		                                  <label class="col-md-4">Tiempo por actividad</label>
		                                  <div class="col-md-7">         
		                                      <input type="text" class="form-control" name="tiempo" id="nombre" placeholder="Sin información" required value="<?php if(isset($tiempo)) echo $tiempo; ?>" disabled>             
		                                  </div>
		                              </div>
		                              <div class="form-group">
		                                  <label class="col-md-4">intensidad</label>
		                                  <div class="col-md-7">         
		                                      <input type="text" class="form-control" name="intensidad" id="nombre" placeholder="Sin información" required value="<?php if(isset($intensidad)) echo $intensidad; ?>" disabled>             
		                                  </div>
		                              </div>
		                              <div class="form-group">
		                                  <label class="col-md-4">Calorias estimadas a quemar</label>
		                                  <div class="col-md-7">         
		                                      <input type="text" class="form-control" name="calorias" id="nombre" placeholder="Sin información" required value="<?php if(isset($calorias)) echo $calorias; ?>" disabled>             
		                                  </div>
		                              </div>
		                              <div class="form-group">
		                                  <div class="col-md-12">         
		                                      <textarea type="text" class="form-control" name="calorias" id="nombre" placeholder="Sin información" disabled><?php if(isset($otro)) echo $otro; ?></textarea>            
		                                  </div>
		                              </div>
		                              <div class="col-md-7"> 
		                              </div>
		                        </form>  
						    </div>
					    </div>				  	             
                	</div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <script>
            $(document).ready(function(){
             	var i;
                for(i=0;i<10;i++)
                    $(".menu_nutra li").eq(i).removeClass('active');
                $(".menu_nutra li").eq(6).addClass('active'); 
            });
        </script> 
        <?php
        function llenar_tabla($tipo_comida){
        	echo '</tr>';
          	if($tipo_comida) 
	          		foreach ($tipo_comida->result() as $datos) {
	          		echo '<tr>';
	          		echo '<td>'.$datos->nombre_archivo.'</td>';
	          		echo '<td>';
	          		if($datos->tipo == 'pdf') 
	          			echo "<img src='".base_url()."bootstrap/css/images/pdf17.png' alt='Archivo pdf' >"; 
	          		else 
	          			echo "<img src='".base_url()."bootstrap/css/images/picture.png' alt='Imagen' >";
	          		echo '</td>';
	          		echo '<td class="text-center"><a href="'.base_url("intranet/decargar_archivo").'/'.$datos->nombre_archivo.'" ><img src="'.base_url().'bootstrap/css/images/save-file.png"></a></td>';
	          		echo '</tr>';
				}
			else echo '<td colspan="3">No existen archivos para mostrar</td>';
        }
        ?>