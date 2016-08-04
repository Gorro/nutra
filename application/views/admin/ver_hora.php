	<div class="container-fluid">
  	<div class="col-md-10 col-md-offset-1 borde">
      <h2 class="text-center">Lista de pacientes</h2>
      <hr>
      <link href="<?= base_url(); ?>bootstrap/calendario/styles/glDatePicker.flatwhite.css" rel="stylesheet"><div class="container-fluid">
      <div class="container">
          <div class="col-md-offset-1 col-md-10">
              <form class="form-horizontal col-sm-8"  enctype="multipart/form-data" action="" method="post" id="user">
              <!--INICIO INGRESO NOMBRE-->
                  <div class="form-group calendario">
                      <label class="col-sm-4">Selecione una fecha:</label>
                      <div class="col-sm-8">
                      <input required type="text" id="fechainicio" gldp-id="fechainicio" class="form-control" name="fechainicio" readonly/>
                      </div> 
                  </div>
              <!--FIN NOMBRE-->
                  <input type="submit" class="btn btn-success" value="Buscar Horas">
              </form>
              <div class="col-sm-12 hidden tabla">
                  <table class="table table-hover table-bordered ">
                      <thead>
                          <tr class="encabezado">
                              <th style="text-align: center;">Hora</th>
                              <th style="text-align: center;">Nombre</th>
                              <th style="text-align: center;">Ver</th>
                          </tr>
                      </thead>
                      <tbody id="citas">
                         
                      </tbody>
                  </table>
                  <input type="submit" class="btn btn-success btn-calendario" value="Ver Calendario">
              </div>     
          </div>
      </div>
    </div>
	</div>
  <script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>    
  <script src="<?= base_url(); ?>bootstrap/js/bootstrap.js"></script>
  <script src="<?= base_url(); ?>bootstrap/js/fileinput.js"></script>
  <script src="<?= base_url(); ?>bootstrap/js/fileinput_locale_es.js"></script>      
  <script src="<?= base_url(); ?>bootstrap/js/admin.js"></script>
  <script src="<?= base_url(); ?>bootstrap/calendario/glDatePicker.js"></script>
  <script src="<?= base_url(); ?>bootstrap/tiempo/js/bootstrap-timepicker.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
  <script src="<?= base_url(); ?>bootstrap/calendario/glDatePicker.js"></script>
        <script src="<?= base_url(); ?>bootstrap/js/moments.js"></script>
        <script>
            $(document).ready(function(){
                $('.btn-calendario').on('click',function(){
                    formulario.removeClass('hidden');
                    $('.gldp-flatwhite').removeClass('hidden');
                    $('.tabla').addClass('hidden');
                })
                $.post(
                    "<?= base_url('intranet/dias_activos'); ?>",
                    "json"
                ).done(function(data){
                    moment.locale('es');
                    //$('#fechainicio').val(moment().format('L'));
                    var dias = data.diasActivos.split(",");
                    if(dias.length == 0)
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),
                                dowOffset: 1,
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                    to: new Date(data.fechaFin)}
                                ]
                            }
                        );                    
                    if(dias.length == 1)               
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),
                                dowOffset: 1,
                                selectableDOW: [parseInt(dias[0])],
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                    to: new Date(data.fechaFin) }
                                ]
                            }
                        );
                    if(dias.length == 2)               
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),dowOffset: 1,
                                selectableDOW: [parseInt(dias[0]),parseInt(dias[1])],
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                     to: new Date(data.fechaFin)
                                    }
                                ]
                            });
                    if(dias.length == 3)               
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),
                                dowOffset: 1,
                                selectableDOW: [parseInt(dias[0]),parseInt(dias[1]),parseInt(dias[2])],
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                    to: new Date(data.fechaFin) }
                                ]
                            }
                        );
                    if(dias.length == 4)               
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),
                                dowOffset: 1,
                                selectableDOW: [parseInt(dias[0]),parseInt(dias[1]),parseInt(dias[2]),parseInt(dias[3])],
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                    to: new Date(data.fechaFin)}
                                ]
                            }
                        );
                    if(dias.length == 5)               
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),
                                dowOffset: 1,
                                selectableDOW: [parseInt(dias[0]),parseInt(dias[1]),parseInt(dias[2]),parseInt(dias[3]),parseInt(dias[4])],
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                    to: new Date(data.fechaFin) }
                                ]
                            }
                        );
                    if(dias.length == 6)               
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),
                                dowOffset: 1,
                                selectableDOW: [parseInt(dias[0]),parseInt(dias[1]),parseInt(dias[2]),parseInt(dias[3]),parseInt(dias[4]),parseInt(dias[5])],
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                    to: new Date(data.fechaFin) }
                                ]
                            }
                        );
                    if(dias.length == 7)               
                        $('#fechainicio').glDatePicker(
                            {
                                showAlways: true,
                                selectedDate: new Date(),
                                dowOffset: 1,
                                selectableDOW: [parseInt(dias[0]),parseInt(dias[1]),parseInt(dias[2]),parseInt(dias[3]),parseInt(dias[4]),parseInt(dias[5]),parseInt(dias[6])],
                                selectableDateRange: [
                                    {from: new Date(data.fechaInicio),
                                    to: new Date(data.fechaFin) }
                                    ]
                                }
                            );                
                $('.calendario').height($('.gldp-flatwhite').height()+50); 
                });
                var formulario = $('#user');
                formulario.on('submit',function(e){
                    e.preventDefault();
                    if($('#fechainicio').val()){
                      formulario.addClass('hidden');
                      $('.gldp-flatwhite').addClass('hidden');
                      $('.tabla').removeClass('hidden');
                      $.post(
                          "<?= base_url('admin/buscar_horas'); ?>",
                          formulario.serialize(),
                          "json"
                      ).done(function(data){
                          moment.locale('es');
                          var horarioInicio = moment(new Date(data.fecha+" "+data.horaInicio));
                          var horarioFin    = moment(new Date(data.fecha+" "+data.horaFin));
                          var horaInicio    = horarioInicio.format('LT');
                          var horaFin       = horarioFin.format('LT');
                          var tabla         = "";
                          var j             = 0;
                          var largo         = data.fechaCita.length;
                          for (var i = 0; horarioInicio.isSameOrBefore(horarioFin); i++) {                            
                              if(data.fechaCitas.indexOf(horarioInicio.format('LT').toString()) == -1){
                                  tabla += '<tr><td align="center">'+horarioInicio.format('LL').replace("de 2016","")+horarioInicio.format('LT')+'</td>';
                                  tabla += '<td align="center"><p class="btn btn-default">Sin Reservar</p></td>';
                                  tabla += '<td align="center"><p class="btn btn-default">Sin Reservar</p></td></tr>';
                              }else{
                                  for(var k=0;k<largo;k++){
                                    if(data.fechaCita[k].indexOf(horarioInicio.format('LT').toString()) != -1){
                                      tabla += '<tr><td align="center">'+horarioInicio.format('LL').replace("de 2016","")+horarioInicio.format('LT')+'</td>';
                                      tabla += '<td align="center"><p class="">'+data.nombre[k]+'</p></td>';
                                      tabla += '<td align="center"><a target="_blank" href="<?php echo base_url() ?>intranet" class="btn btn-primary veruser" onclick="usuario2(\''+data.mail[k]+'\',\'<?php echo base_url() ?>\')">Ver Usuario <span class="glyphicon glyphicon-user"></a></td></tr>';
                                    }
                                  }
                              }
                              horarioInicio.add(data.intervalo,'m');
                          }
                          $('#citas').html(tabla);
                      }).fail(function(data){
                          $('#citas').html("No encuentran horas para reservar");
                      });
                    }else{
                      alert("Debe ingresar una fecha");
                    }
                });            
            });            
        </script> 
        <script src="<?= base_url(); ?>bootstrap/js/admin.js"></script> 
</body>
</html>