<div class="container">
	<div class="load"></div>
	<div class="col-md-offset-2 col-md-8">
		<h1 class="text-center">Ingreso datos Usuario</h1>
		<hr>
		<?php
        $attributes = array('class' => 'form-horizontal', 'id' => 'form');
        echo form_open('nutricion/form_datos',$attributes); 
        ?>

        <!--INICIO INGRESO NOMBRE-->
            <div class="form-group">
                <label class="col-md-3"><p>Nombre Completo</p></label>
                <div class="col-md-9">         
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="<?php echo set_value('nombre'); ?>" required>
                    <?php echo form_error('nombre','
                        <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>','</div> '); ?>                
                </div>
            </div>
        <!--FIN NOMBRE-->
        <!-- INICIO FECHA -->
            <div class="form-group">
                <label class="col-md-3"><p>Fecha de nacimiento</p></label>
                <div class="col-md-9 selector">         
                    <select name="dia" required="required" id="dia">
                        <option value=""><p>Día</p></option>
                        <?php 
                            for($i=1;$i<=31;$i++){
                                $numero = sprintf("%02s", $i);
                                echo '<option value="'.$numero.'">'.$numero.'</option>'; 
                            }                                           
                        ?>
                    </select>
                    <select name="mes" required="required" id="mes"> 
                        <option value=""><p>Mes</p></option>
                        <?php 
                            for($i=1;$i<=12;$i++){
                                $numero = sprintf("%02s", $i);
                                echo '<option value="'.$numero.'">'.$numero.'</option>'; 
                            }                                            
                        ?>
                    </select>
                    <select name="anoXD" required="required" id="ano">
                        <option value=""><p>Año</p></option>
                        <?php 
                            $ano_a = intval(date("Y"));
                            for($i=$ano_a;$i>=1940;$i--)
                                echo '<option value="'.$i.'">'.$i.'</option>';                                            
                        ?>
                    </select>
                </div>
            </div>
            <!-- FIN FECHA -->
            <!-- INICIO MAIL -->
            <div class="form-group">
                <label class="col-md-3"><p>Mail</p></label>
                <div class="col-md-9">
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="Ingrese su mail" value="<?php echo set_value('mail'); ?>" required>
                    <img src="<?= base_url(); ?>bootstrap/css/images/load.GIF" alt="Buscando mail" class="center-block load_mail hide"/><?php echo form_error('mail','
                        <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>','</div> '); ?>                        
                </div>
            </div>
            <!-- FIN MAIL -->
            <!-- INICIO SEXO -->
            <div class="form-group">
                <label class="col-md-3"><p>Sexo</p></label>
                <div class="radio col-md-9">
                    <label>
                        <input type="radio" name="sexo" value="masculino" required><p>Masculino</p>
                    </label>
                    <label>
                        <input type="radio" name="sexo" value="femenino" required><p>Femenino</p>
                    </label>
                </div>
            </div>
            <!-- FIN SEXO -->           
            <br>
            <input class="btn btn-success pull-left" type="submit" value="Siguiente" id="boton_enviar" />
        </form> 	
	</div>
</div>
<script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap-filestyle.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/imagen.js"></script>
<script src="<?= base_url(); ?>bootstrap/js/bootstrap-slider.js"></script>
<script>
    $( document ).ready(function(){
        /*button-btn small-btn green-bg*/ 
        var mail = false;
        var edad = false;
        var formulario = $('#form');
        var boton = $('#boton_enviar');
        boton.on('click',function(e){
            e.preventDefault();
            $.post(
                "<?= base_url('intranet/buscar'); ?>",
                {mail : $('#mail').val()},
                function(respuesta){
                    if(respuesta){
                        $('.load_mail').addClass('hide');
                        $('#mail').removeClass('hide');
                        $('btn').removeAttr('disabled');
                        $('#mail').val('');
                        mail =false;
                    }
                    else{
                        $('.load_mail').addClass('hide');
                        $('#mail').removeClass('hide');                     
                        $('btn').removeAttr('disabled');
                        mail = true;
                    }
                    edad = verificar_fecha();
                    if(mail && edad){
                        formulario.submit();
                    }else if(mail){
                        alert("Debe ser mayor de edad para poder seguir adelante");                                     
                    }else if (edad) {
                        alert("Mail ingresado ya se encuentra registrado");
                    }else if(!mail && !edad){
                        alert("Mail ingresado ya se encuentra registrado,además, debe ser mayor de edad para poder seguir adelante")
                    }
                }
            );
        });
    });
    var verificar_fecha = function(){
        var fecha_actual = new Date();
        var flag2 = false;
        if(fecha_actual.getFullYear() - $('#ano').val() < 18){
            flag2 = false;
        }else if(fecha_actual.getFullYear() - $('#ano').val() == 18 ){
            if(fecha_actual.getMonth()+1 > parseInt($('#mes').val())){
                flag2 = true;
            }else if(fecha_actual.getMonth()+1==parseInt($('#mes').val())){
                if(fecha_actual.getDate()>= parseInt($('#dia').val())){
                    flag2 = true;
                }else{
                    flag2 = false;
                }
            }else if(fecha_actual.getMonth()+1 < parseInt($('#mes').val())){
                flag2 = false;
            }
        }else if(fecha_actual.getFullYear() - $('#ano').val() > 18){
            flag2 = true;
        }
        return flag2;
    }
</script>