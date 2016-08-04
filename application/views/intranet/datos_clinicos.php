		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-md-offset-1 col-md-11">
                        <h1 class="text-center">Datos Clínicos</h1>
                        <hr>
                        <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post" id="form">
                            <div role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#cardiovascular" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Sistema cardiovascular</a></li>
                                    <li role="presentation"><a href="#digestivo" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Sistema digestivo</a></li>
                                    <li role="presentation"><a href="#Boca" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Boca</a></li>         
                                    <li role="presentation"><a href="#urinario" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Sistema urinario</a></li>         
                                    <li role="presentation"><a href="#alimentarias" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Alergias alimentarias</a></li>         
                                    <li role="presentation"><a href="#metabolismo" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Glándulas y metabolismo</a></li>        
                                    <li role="presentation"><a href="#Otros" aria-controls="" data-toggle="tab" role="tab" class="listatabs">Otros</a></li>                       
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="cardiovascular">
                                     <!-- INICIO ENFERMEDADES 1 -->
                                    <?php 
                                        if(isset($enfermedades))$datos = explode(',', $enfermedades);
                                    ?>
                                    <div class="form-group">
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Angina de pecho' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Angina de pecho' )==0) echo 'checked'; $i=0; ?>> Angina de pecho
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Antecedentes de infarto' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Antecedentes de infarto' )==0) echo 'checked'; $i=0; ?>> Antecedentes de infarto
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Hipertensión' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Hipertensión' )==0) echo 'checked'; $i=0; ?>> Hipertensión
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='hipotensión' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'hipotensión' )==0) echo 'checked'; $i=0; ?>> hipotensión
                                            </label>
                                            <div class='clearfix'></div>
                                            <br>                                                                     
                                        </div>
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Taquicardia' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Taquicardia' )==0) echo 'checked'; $i=0; ?>> Taquicardia
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Varices' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Varices' )==0) echo 'checked'; $i=0; ?>> Varices
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Colesterol total elevado' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Colesterol total elevado' )==0) echo 'checked'; $i=0; ?>> Colesterol total elevado
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Trigliceridos elevados' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Trigliceridos elevados' )==0) echo 'checked'; $i=0; ?>> Trigliceridos elevados
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                    </div> 
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="digestivo">
                                    <div class="form-group">
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Acidez estomacal' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Acidez estomacal' )==0) echo 'checked'; $i=0; ?>> Acidez estomacal
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='colitis' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'colitis' )==0) echo 'checked'; $i=0; ?>> colitis
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Colon irritable' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Colon irritable' )==0) echo 'checked'; $i=0; ?>> Colon irritable
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Diarrea' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Diarrea' )==0) echo 'checked'; $i=0; ?>> Diarrea
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Distensión abdominal' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Distensión abdominal' )==0) echo 'checked'; $i=0; ?>> Distensión abdominal
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Reflujo' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Reflujo' )==0) echo 'checked'; $i=0; ?>> Reflujo
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                        <div class="checkbox col-md-6"> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Estreñimiento' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Estreñimiento' )==0) echo 'checked'; $i=0; ?>> Estreñimiento
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='gastritis' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'gastritis' )==0) echo 'checked'; $i=0; ?>> gastritis
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Hemorroides' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Hemorroides' )==0) echo 'checked'; $i=0; ?>> Hemorroides
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Náuseas' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Náuseas' )==0) echo 'checked'; $i=0; ?>> Náuseas
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Úlceras' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Úlceras' )==0) echo 'checked'; $i=0; ?>> Úlceras
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                    </div>
                                </div>                                
                                <div role="tabpanel" class="tab-pane fade" id="Boca">
                                    <div class="form-group">                                        
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Problemas de deglución' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Problemas de deglución' )==0) echo 'checked'; $i=0; ?>> Problemas de deglución
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Problemas de masticación' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Problemas de masticación' )==0) echo 'checked'; $i=0; ?>> Problemas de masticación
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Problemas de salivción' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Problemas de salivción' )==0) echo 'checked'; $i=0; ?>> Problemas de salivción
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="urinario">
                                    <div class="form-group">                                        
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Insuficiencia renal' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Insuficiencia renal' )==0) echo 'checked'; $i=0; ?>> Insuficiencia renal
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Calculos renales' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Calculos renales' )==0) echo 'checked'; $i=0; ?>> Calculos renales
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Síndrome nefrotico' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Síndrome nefrotico' )==0) echo 'checked'; $i=0; ?>> Síndrome nefrotico
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="alimentarias">
                                    <div class="form-group">                                        
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Intolerancia a la lactosa' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Intolerancia a la lactosa' )==0) echo 'checked'; $i=0; ?>> Intolerancia a la lactosa
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Intolerancia al gluten' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Intolerancia al gluten' )==0) echo 'checked'; $i=0; ?>> Intolerancia al gluten
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='intolerancia a la fenilalanina' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'intolerancia a la fenilalanina' )==0) echo 'checked'; $i=0; ?>> intolerancia a la fenilalanina
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Otras intolerancias o alergias' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Otras intolerancias o alergias' )==0) echo 'checked'; $i=0; ?>> Otras intolerancias o alergias
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="metabolismo">
                                    <div class="form-group">                                        
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Errores metabólicos congénitos' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Errores metabólicos congénitos' )==0) echo 'checked'; $i=0; ?>> Errores metabólicos congénitos
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Hipertiroidismo' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Hipertiroidismo' )==0) echo 'checked'; $i=0; ?>> Hipertiroidismo
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Hipotiroidismo' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Hipotiroidismo' )==0) echo 'checked'; $i=0; ?>> Hipotiroidismo
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Otros">
                                    <div class="form-group">                                        
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Anemia' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Anemia' )==0) echo 'checked'; $i=0; ?>> Anemia
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Anorexia' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Anorexia' )==0) echo 'checked'; $i=0; ?>> Anorexia
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Aloholismo' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Aloholismo' )==0) echo 'checked'; $i=0; ?>> Aloholismo
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Bulimia' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Bulimia' )==0) echo 'checked'; $i=0; ?>> Bulimia
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Cáncer' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Cáncer' )==0) echo 'checked'; $i=0; ?>> Cáncer
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Cirrocis' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Cirrocis' )==0) echo 'checked'; $i=0; ?>> Cirrocis
                                            </label>
                                            <div class='clearfix'></div>
                                            <br>
                                        </div>                                       
                                        <div class="checkbox col-md-6">
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Desnutrición' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Desnutrición' )==0) echo 'checked'; $i=0; ?>> Desnutrición
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Diabetes' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Diabetes' )==0) echo 'checked'; $i=0; ?>> Diabetes
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Gota' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Gota' )==0) echo 'checked'; $i=0; ?>> Gota
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Obesidad o sobrepeso' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Obesidad o sobrepeso' )==0) echo 'checked'; $i=0; ?>> Obesidad o sobrepeso
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Osteoporosis' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Osteoporosis' )==0) echo 'checked'; $i=0; ?>> Osteoporosis
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                            <label>
                                                <input type='checkbox' name='datos[]' value='Vigorexia' class='enfermedades' <?php for($i=0;$i<44;$i++)if(isset($datos[$i]))if(strcmp($datos[$i],'Vigorexia' )==0) echo 'checked'; $i=0; ?>> Vigorexia
                                            </label>
                                            <div class='clearfix'></div>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <!-- FIN ENFERMEDADES 2 -->
                            <div class="clearfix"></div>
                            <hr>
                            <!-- INICIO ENFERMEDAD -->
                            <div class="form-group trans1 enfermedad">
                                <label class="col-md-5" >¿Otra enfermedad?</label>
                                <div class="radio col-md-7">
                                    <label>
                                        <input type="radio" name="osi" value="Si" id="osi" <?php if(isset($otra)) if($otra != null and strcmp($otra,'No') != 0) echo 'checked'; ?>> Si
                                    </label>
                                    <label>
                                        <input type="radio" name="osi" value="No" class="ono" <?php if(isset($otra)){ if(strcmp($otra,'No') == 0) echo 'checked';}else echo 'checked' ?>> No
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                
                                <div class="col-md-12">                                    
                                        <textarea type="text" class="form-control <?php if(isset($otra)){ if($otra == null or strcmp($otra,'No') == 0) echo 'hide visible ';}else echo 'hide visible '; ?>trans1" name="otra" id="enfermedades" rows="5" placeholder="Ingrese Enfermedad/es" ><?php if(isset($otra)) if($otra != null and strcmp($otra, 'No') != 0) echo $otra ?></textarea>
                                        <?php echo form_error('otra','
                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>','</div> '); ?>
                                </div>
                            </div>
                            <!-- FIN ENFERMEDAD -->
                            
                            <!-- INICIO MEDICINA -->
                            <div class="form-group trans1 enfermedad">
                                <label class="col-md-5" >¿Toma algun medicamento?</label>
                                <div class="radio col-md-7">
                                    <label>
                                        <input type="radio" name="msi" value="Si" id="msi" required <?php if(isset($medicamentos)) if($medicamentos != null and strcmp($medicamentos,'No') != 0) echo 'checked'; ?>> Si
                                    </label>
                                    <label>
                                        <input type="radio" name="msi" value="No" id="mno" required <?php if(isset($medicamentos)){ if(strcmp($medicamentos,'No') == 0 || !isset($medicamentos)) echo 'checked';}else echo 'checked' ?> > No
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                
                                <div class="col-md-12">                                    
                                        <textarea type="text" class="form-control <?php if(isset($medicamentos)){ if($medicamentos == null or strcmp($medicamentos,'No') == 0) echo 'hide visible ';}else echo 'hide visible ';?>trans1" name="medicamento" id="medicamento" rows="5" placeholder="Ingrese el o los medicamentos" ><?php if(isset($medicamentos)) if($medicamentos != null and strcmp($medicamentos, 'No') != 0) echo $medicamentos ?></textarea>
                                        <?php echo form_error('otra','
                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>','</div> '); ?>
                                </div>
                            </div>
                            <!-- FIN MEDICINA -->
                            
                            <!-- INICIO MEDICINA -->
                            <div class="form-group trans1 enfermedad">
                                <label class="col-md-5" >¿Se ha realizado alguna cirugia gastrica?</label>
                                <div class="radio col-md-7">
                                    <label>
                                        <input type="radio" name="csi" value="Si" id="csi" required <?php if(isset($cirugia)) if($cirugia != null and strcmp($cirugia,'No') != 0) echo 'checked'; ?>> Si
                                    </label>
                                    <label>
                                        <input type="radio" name="csi" value="No" id="cno" required <?php if(isset($cirugia)){ if(strcmp($cirugia,'No') == 0 || !isset($cirugia)) echo 'checked';}else echo 'checked' ?> > No
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                
                                <div class="col-md-12">                                    
                                        <textarea type="text" class="form-control <?php if(isset($cirugia)){ if($cirugia == null or strcmp($cirugia,'No') == 0) echo 'hide visible ';}else echo 'hide visible '; ?>trans1" name="cirugia" id="cirugia" rows="5" placeholder="Ingrese el tipo de cirugia" ><?php if(isset($cirugia)) if($cirugia != null and strcmp($cirugia, 'No') != 0) echo $cirugia ?></textarea>
                                        <?php echo form_error('otra','
                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>','</div> '); ?>
                                </div>
                            </div>
                            <!-- FIN MEDICINA -->
                            
                            <input class="btn btn-success pull-left" type="submit" value="Guardar" />
                        </form>     
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->  
        <script>
        $( document ).ready(function() {
            var formulario = $('#form');
            formulario.on('submit',function(e){
                e.preventDefault();
                if ($('input[type=checkbox]:checked').length === 0) {
                    e.preventDefault();
                    alert('Debe seleccionar al menos una enfermedad o ninguna.');
                    return false;
                }else{
                    var guardando;
                    guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
                    $('.col-md-offset-1').html(guardando);
                    $.post(
                        "<?= base_url('intranet/insertar_datos_clinicos'); ?>",
                        formulario.serialize(),
                        function(respuesta){
                            location.reload();
                        }
                    );
                }
            });            
            var i;
                for(i=0;i<10;i++)
                    $(".menu_nutra li").eq(i).removeClass('active');   
                $(".menu_nutra li").eq(1).addClass('active');
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
                $('#cirugia').addClass('visible').delay(700).queue(function(){
                    $(this).addClass('hide');
                    $('#cirugia').removeAttr('required');
                    $(this).dequeue();
                });
            });
        });
        </script>

        

    
