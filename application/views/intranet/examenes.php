<div id="page-wrapper">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-offset-2 col-md-8">
                <h1 class="text-center">Examenes</h1>
                <hr>
                <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="examenes">
                	<!--INICIO INGRESO COLESTEROL-->
                    <div class="form-group">
                        <label class="col-md-3">Colesterol</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="Colesterol" id="Colesterol" placeholder="Ingrese valor de Colesterol" value="<?php if(isset($Colesterol))echo $Colesterol; ?>"   <?php if(!$login_admin){ echo "readonly";} ?>>             
                        </div>
                        <label class="col-md-5"></label>
                    </div>
                    <!--FIN COLESTEROL-->
                    <!--INICIO INGRESO Glucosa-->
                    <div class="form-group">
                        <label class="col-md-3">Glucosa Capilar</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="Capilar" id="Capilar" placeholder="Ingrese valor de Glucosa Capilar" value="<?php if(isset($Capilar))echo $Capilar; ?>"  <?php if(!$login_admin){ echo "readonly";} ?>>             
                        </div>
                        <label class="col-md-5"></label>
                    </div>
                    <!--FIN Glucosa-->
                    <!--INICIO INGRESO Lactato-->
                    <div class="form-group">
                        <label class="col-md-3">Lactato</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="Lactato" id="Lactato" placeholder="Ingrese valor de Lactato" value="<?php if(isset($Lactato))echo $Lactato; ?>"  <?php if(!$login_admin){ echo "readonly";} ?>>             
                        </div>
                        <label class="col-md-5"></label>
                    </div>
                    <!--FIN Lactato-->
                    <!--INICIO INGRESO Glucosa Sanguínea-->
                    <div class="form-group">
                        <label class="col-md-3">Glucosa Sanguínea</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="Sanguinea" id="Sanguinea" placeholder="Ingrese valor de Glucosa Sanguínea" value="<?php if(isset($Sanguinea))echo $Sanguinea; ?>" >             
                        </div>
                        <label class="col-md-5">Niveles desables 70 a 100 mg/dl</label>
                    </div>
                    <!--FIN Glucosa Sanguínea-->
                    <!--INICIO INGRESO Creatitina-->
                    <div class="form-group">
                        <label class="col-md-3">Creatitina</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="Creatitina" id="Creatitina" placeholder="Ingrese valor de Creatitina" value="<?php if(isset($Creatitina))echo $Creatitina; ?>" >             
                        </div>
                        <label class="col-md-5">Hombres: de 0,7 a 1,3 mg/dl <br>Mujeres: de 0,6 a 1,1 mg/dl</label>
                    </div>
                    <!--FIN Creatitina-->
                    <!--INICIO INGRESO Colesterol Total-->
                    <div class="form-group">
                        <label class="col-md-3">Colesterol Total</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="ColesterolT" id="ColesterolT" placeholder="Ingrese valor de Colesterol Total" value="<?php if(isset($ColesterolT))echo $ColesterolT; ?>" >             
                        </div>
                        <label class="col-md-5">Niveles deseables < 200mg/dl</label>
                    </div>
                    <!--FIN Colesterol Total-->
                    <!--INICIO INGRESO Colesterol HDL-->
                    <div class="form-group">
                        <label class="col-md-3">Colesterol HDL</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="ColesterolH" id="ColesterolH" placeholder="Ingrese valor de Colesterol HDL" value="<?php if(isset($ColesterolH))echo $ColesterolH; ?>" >             
                        </div>
                        <label class="col-md-5">Niveles deseables > 40mg/dl</label>
                    </div>
                    <!--FIN Colesterol HDL-->
                    <!--INICIO INGRESO Insulina Basal-->
                    <div class="form-group">
                        <label class="col-md-3">Insulina Basal</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="insulina" id="ColesterolH" placeholder="Ingrese valor de Insulina Basal" value="<?php if(isset($insulina))echo $insulina; ?>" >             
                        </div>
                        <label class="col-md-5">Valores deseables < 10 mUI/ml</label>
                    </div>
                    <!--FIN Insulina Basal-->
                    <!--INICIO INGRESO Colesterol LDL-->
                    <div class="form-group">
                        <label class="col-md-3">Colesterol LDL</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="ColesterolL" id="ColesterolL" placeholder="Ingrese valor de Colesterol LDL" value="<?php if(isset($ColesterolL))echo $ColesterolL; ?>" >             
                        </div>
                        <label class="col-md-5">Niveles deseables < 140mg/dl</label>
                    </div>
                    <!--FIN Colesterol LDL-->
                    <!--INICIO INGRESO Hemoglobina Glicosilada %-->
                    <div class="form-group">
                        <label class="col-md-3">Hemoglobina Glicosilada %</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="Glicosilada" id="Glicosilada" placeholder="Ingrese valor de Hemoglobina Glicosilada %" value="<?php if(isset($Glicosilada))echo $Glicosilada; ?>" >             
                        </div>
                        <label class="col-md-5">Para el diagnostico de diabetes < 5,7%<br>Para el control de diabetes < 6,5%</label>
                    </div>
                    <!--FIN Hemoglobina Glicosilada %-->
                    <!--INICIO INGRESO Hematocrito-->
                    <div class="form-group">
                        <label class="col-md-3">Hematocrito</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="Hematocrito" id="Hematocrito" placeholder="Ingrese valor de Hematocrito" value="<?php if(isset($Hematocrito))echo $Hematocrito; ?>" >             
                        </div>
                        <label class="col-md-5">Hombres: de 40.7 a 50.3%<br>Mujeres: de 36.1 a 44.3%</label>
                    </div>
                    <!--FIN Hematocrito-->
                    <!--INICIO INGRESO Hemoglobina en sangre-->
                    <div class="form-group">
                        <label class="col-md-3">Hemoglobina en sangre</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="HemoglobinaS" id="HemoglobinaS" placeholder="Ingrese valor de Hemoglobina en sangre" value="<?php if(isset($HemoglobinaS))echo $HemoglobinaS; ?>" >             
                        </div>
                        <label class="col-md-5">Hombres: de 14 a 18 g/dl<br>Mujeres: de 12 a 16 g/dl</label>
                    </div>
                    <!--FIN Hemoglobina en sangre-->
                    <!--INICIO INGRESO TRIGLICÉRIDOS-->
                    <div class="form-group">
                        <label class="col-md-3">Triglicéridos</label>
                        <div class="col-md-4">         
                            <input type="text" class="form-control" name="trigliceridos" id="trigliceridos" placeholder="Ingrese valor de Triglicéridos" value="<?php if(isset($trigliceridos))echo $trigliceridos; ?>" ?>            
                        </div>
                        <label class="col-md-5">Niveles deseables < 150 mg/dl</label>
                    </div>
                    <!--FIN TRIGLICÉRIDOS-->
                    <!--INICIO INGRESO OTROS EXAMENES-->
                    <div class="form-group">
                        <label class="col-md-3">Otros exámenes</label>
                        <div class="col-md-9">         
                            <textarea type="text" class="form-control" name="otros" id="otros" placeholder="Ingrese valores de otros exámenes" rows="5"><?php if(isset($otros))echo $otros; ?></textarea>            
                        </div>
                    </div>
                    <!--FIN Hemoglobina en sangre-->
                    <input type="submit" class="btn btn-success " value ="Guardar">
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var formulario = $('#examenes');
        formulario.on('submit',function(e){
            e.preventDefault();
            var guardando;
            guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
            $('.col-md-offset-1').html(guardando);
            $.post(
                "<?= base_url('intranet/insertar_examenes'); ?>",
                formulario.serialize(),
                function(respuesta){
                    location.reload();
                }
            ); 
        });
    });
</script>