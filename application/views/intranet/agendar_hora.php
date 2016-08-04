        <div id="page-wrapper" >
                <link href="<?= base_url(); ?>bootstrap/calendario/styles/glDatePicker.flatwhite.css" rel="stylesheet"><div class="container-fluid">
                <div class="container">
                    <div class="col-md-offset-1 col-md-10">
                        <h1 class="text-center">Agendar una cita</h1>
                        <hr>
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
                        <div class="col-sm-8 hidden tabla">
                            <table class="table table-hover table-bordered ">
                                <thead>
                                    <tr class="encabezado">
                                        <th style="text-align: center;">Hora</th>
                                        <th style="text-align: center;">Seleccionar</th>
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
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
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
                    if($('#fechainicio').val() != ""){
                        formulario.addClass('hidden');
                        $('.gldp-flatwhite').addClass('hidden');
                        $('.tabla').removeClass('hidden');
                        $.post(
                            "<?= base_url('intranet/buscar_horas'); ?>",
                            formulario.serialize(),
                            "json"
                        ).done(function(data){
                            moment.locale('es');
                            var horarioInicio = moment(new Date(data.fecha+" "+data.horaInicio));
                            var horarioFin    = moment(new Date(data.fecha+" "+data.horaFin));
                            var horaInicio    = horarioInicio.format('LT');
                            var horaFin       = horarioFin.format('LT');
                            var horarioIniciot = moment(new Date(data.fecha+" "+data.horaIniciot));
                            var horarioFint    = moment(new Date(data.fecha+" "+data.horaFint));
                            var horaIniciot    = horarioIniciot.format('LT');
                            var horaFint      = horarioFint.format('LT');
                            var tabla         = "";
                            for (var i = 0; horarioInicio.isSameOrBefore(horarioFin); i++) {
                                if(data.fechaCita.indexOf(horarioInicio.format('LT').toString()) == -1){
                                    tabla += '<tr><td align="center">'+horarioInicio.format('LL').replace("de 2016","")+horarioInicio.format('LT')+'</td>';
                                    tabla += '<td align="center"><p class="btn btn-primary" onclick="insertar_hora('+horarioInicio+')">Reservar</p></td></tr>';
                                }else{
                                    tabla += '<tr><td align="center">'+horarioInicio.format('LL').replace("de 2016","")+horarioInicio.format('LT')+'</td>';
                                    tabla += '<td align="center"><p class="btn btn-danger">Reservada</p></td></tr>';
                                }
                                horarioInicio.add(data.intervalo,'m');
                            }
                            for (var i = 0; horarioIniciot.isSameOrBefore(horarioFint); i++) {
                                if(data.fechaCita.indexOf(horarioIniciot.format('LT').toString()) == -1){
                                    tabla += '<tr><td align="center">'+horarioIniciot.format('LL').replace("de 2016","")+horarioIniciot.format('LT')+'</td>';
                                    tabla += '<td align="center"><p class="btn btn-primary" onclick="insertar_hora('+horarioIniciot+')">Reservar</p></td></tr>';
                                }else{
                                    tabla += '<tr><td align="center">'+horarioIniciot.format('LL').replace("de 2016","")+horarioIniciot.format('LT')+'</td>';
                                    tabla += '<td align="center"><p class="btn btn-danger">Reservada</p></td></tr>';
                                }
                                horarioIniciot.add(data.intervalo,'m');
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
            var insertar_hora = function(hora){
                moment.locale('es');
                var horaCita = moment(new Date(hora));
                horaCita = horaCita.format('L')+" "+horaCita.format('LT');
                if(confirm("Va agendar una cita para "+horaCita+"\n\n¿desea confirma la hora?")){
                    moment.locale('eu');
                    var horaCita = moment(new Date(hora));
                    horaCita = horaCita.format('L')+" "+horaCita.format('LT');
                    $.post(
                        "<?= base_url('intranet/insertar_cita'); ?>",
                        {'mail':"<?php echo $mail; ?>",
                         'fecha':horaCita},
                        "json"
                    ).done(function(){
                        location.reload();
                    }).fail(function(data){
                    });
                }
            }
        </script> 

        

    
