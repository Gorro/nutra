	<div class="container top bottom">
	    <div class="col-md-offset-2 col-md-8">
	        <h2 class="text-center color">Datos Clínicos</h2>
	        <hr>
	        <?php
			$attributes = array('class' => 'form-horizontal');
			echo form_open('nutricion/form_clinicos',$attributes); 
			?>
	            <div class="col-md-6">
	                <!-- INICIO ENFERMEDADES 1 -->
	                <div class="form-group">
	                    <div class="checkbox col-md-6 col-md-offset-4">
	                        <label>
	                            <input type="checkbox" name="datos[]" value="Hipertenso" class="enfermedades"><p>Hipertenso</p> 
	                        </label>
	                        <div class="clearfix"></div>
	                        <br>
	                        <label>
	                            <input type="checkbox" name="datos[]" value="Colesterol alto" class="enfermedades"><p>Colesterol alto</p>
	                        </label>
	                        <div class="clearfix"></div>
	                        <br>
	                        <label>
	                            <input type="checkbox" name="datos[]" value="Diabetes" class="enfermedades"><p>Diabetes</p>
	                        </label>
	                        <div class="clearfix"></div>
	                        <br>                        
	                        <label>
	                            <input type="checkbox" name="datos[]" value="Obesidad" class="enfermedades"><p>Obesidad</p> 
	                        </label>
	                        <div class="clearfix"></div>
	                        <br>                        
	                    </div>
	                </div>
	            </div>
	            <!-- FIN ENFERMEDADES 1 -->
	            <!-- INICIO ENFERMEDADES 2 -->
	            <div class="col-md-6">
	                <div class="form-group">
	                    <div class="checkbox col-md-6 col-md-offset-4">                                        
	                        <label>
	                            <input type="checkbox" name="datos[]" value="Ninguna" class="ninguna" checked><p>Ninguna</p>
	                        </label>
	                        <div class="clearfix"></div>
	                        <br>                                                            
	                    </div>
	                </div>
	            </div>
	            <!-- FIN ENFERMEDADES 2 -->
	            <div class="clearfix"></div>
	            <hr>
	            <!-- INICIO ENFERMEDAD -->
	            <div class="form-group trans1 enfermedad">
	                <label class="col-md-5" ><p>¿Otra enfermedad?</p></label>
	                <div class="radio col-md-7">
	                    <label>
	                        <input type="radio" name="osi" value="Si" id="osi" ><p>Si</p>
	                    </label>
	                    <label>
	                        <input type="radio" name="osi" value="No" class="ono" checked><p>No</p>
	                    </label>
	                </div>
	                <div class="clearfix"></div>
	                <br>
	                <div class="col-md-12">                                    
	                        <textarea type="text" class="form-control hide visible trans1" name="otra" id="enfermedades" rows="5" placeholder="Ingrese Enfermedad/es"></textarea>
	                        <?php echo form_error('otra','
	                        <div class="alert alert-warning alert-dismissible" role="alert">
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                        <span aria-hidden="true">&times;</span></button>','</div> '); ?>
	                </div>
	            </div>
	            <!-- FIN ENFERMEDAD -->
	            <br>
	            <input class="btn btn-success pull-left" type="submit" value="Siguiente" />
	        </form>     
	    </div>
	</div>
    <!-- /#page-wrapper --> 
	<script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>
	<script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>bootstrap/js/bootstrap-filestyle.js"></script>
	<script src="<?= base_url(); ?>bootstrap/js/imagen.js"></script>
	<script src="<?= base_url(); ?>bootstrap/js/bootstrap-slider.js"></script>
    <script>
    $( document ).ready(function() {                 
        var i;            
        if($('#otra').prop('checked')){
            $('.enfermedad').removeClass('hide').delay(100).queue(function(){
                $(this).removeClass('visible');
                $('#enfermedades').attr('required', '');
                $(this).dequeue();
            });
        }
        $('.ninguna').change(function(event) {
            $('.enfermedades').prop( "checked", false );
        });
        $('.enfermedades').change(function(event) {
            $('.ninguna').prop( "checked", false );
        });
        $('form').submit(function(e){
            if ($('input[type=checkbox]:checked').length === 0) {
                e.preventDefault();
                alert('Debe seleccionar al menos un valor');
            }
        });
        $('#osi').click(function(){
            $('#enfermedades').removeClass('hide').delay(100).queue(function(){
                $(this).removeClass('visible');
                $('#enfermedades').attr('required', '');
                $(this).dequeue();
            });                    
        });
        $('.ono').click(function(event) {
            $('#enfermedades').addClass('visible').delay(700).queue(function(){
                $(this).addClass('hide');
                $('#enfermedades').removeAttr('required');
                $(this).dequeue();
            });
        });
        $('#msi').click(function(){
            $('#medicamento').removeClass('hide').delay(100).queue(function(){
                $(this).removeClass('visible');
                $('#medicamento').attr('required', '');
                $(this).dequeue();
            });                    
        });
        $('#mno').click(function(event) {
            $('#medicamento').addClass('visible').delay(700).queue(function(){
                $(this).addClass('hide');
                $('#medicamento').removeAttr('required');
                $(this).dequeue();
            });
        });
        $('#csi').click(function(){
            $('#cirugia').removeClass('hide').delay(100).queue(function(){
                $(this).removeClass('visible');
                $('#cirugia').attr('required', '');
                $(this).dequeue();
            });                    
        });
        $('#cno').click(function(event) {
        	alert("hola");
            $('#cirugia').addClass('visible').delay(700).queue(function(){
                $(this).addClass('hide');
                $('#cirugia').removeAttr('required');
                $(this).dequeue();
            });
        });
    });
    </script>