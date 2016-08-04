

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-md-offset-1 col-md-8">
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
                                      <input type="text" class="form-control" name="calorias" id="nombre" placeholder="Sin información" reqSin informaciónuired value="<?php if(isset($calorias)) echo $calorias; ?>" disabled>             
                                  </div>
                              </div>
                              <div class="col-md-7"> 
                              </div>
                        </form>                             
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

        

    
