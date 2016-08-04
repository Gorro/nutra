	<div class="container-fluid">
  	<div class="col-md-10 col-md-offset-1 borde">
      <h2 class="text-center">Crear Agenda</h2>
      <hr>
      <form class="form-horizontal" id="agenda" method="post">
        <!--INICIO INGRESO NOMBRE-->
        <div class="form-group">
          <label class="col-md-2">Nombre de la agenda:</label>
          <div class="col-md-3">         
              <input required type="text" class="form-control" name="nombre_agenda" id="nombre" placeholder="Ingrese el nombre de la agenda">             
          </div>
         <!--  <label class="col-md-2">Profesional:</label>
         <div class="col-md-3">         
             <input required type="text" class="form-control" name="profesional" id="profesional" placeholder="Ingrese el nombre del profesional">             
         </div>  -->
        </div>
        <hr>
        <!--FIN NOMBRE-->
        <!--INICIO DIAS SEMANA-->
        <div class="form-group">   
          <label class="col-md-2">Días activos:</label>       
          <div class="checkbox col-md-9">
            <label class="checkbox-inline">
                <input type="checkbox" name="diasactivos[]" value="1" class="enfermedades" > Lunes 
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="diasactivos[]" value="2" class="enfermedades" > Martes
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" name="diasactivos[]" value="3" class="enfermedades" > Miercoles
            </label>                   
            <label class="checkbox-inline">
                <input type="checkbox" name="diasactivos[]" value="4" class="enfermedades" > Jueves
            </label>   
            <label class="checkbox-inline">
                <input type="checkbox" name="diasactivos[]" value="5" class="enfermedades" > Viernes
            </label> 
            <label class="checkbox-inline">
                <input type="checkbox" name="diasactivos[]" value="6" class="enfermedades" > Sabado
            </label>  
            <label class="checkbox-inline">
                <input type="checkbox" name="diasactivos[]" value="0" class="enfermedades" > Domingo
            </label>                
          </div> 
        </div>
        <hr>
        <br>
        <div class="clearfix"></div>
        <!--HORARIO MAÑANA-->
        <h3 class="text-center">Horario de mañana</h3>
        <hr>
        <div class="form-group">
          <label class="col-md-2">Hora de inicio:</label>
          <div class="col-md-2">
            <div class="input-group bootstrap-timepicker timepicker">
                <input required id="timepicker1" type="text" class="form-control input-small" name="horainicio">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>
          </div>
          <label class="col-md-2 col-md-offset-1">Hora de fin:</label>
          <div class="col-md-2">
            <div class="input-group bootstrap-timepicker timepicker">
                <input required id="timepicker2" type="text" class="form-control input-small" name="horafin">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>
          </div>
        </div>
        <hr>
        <br>
        <!--HORARIO TARDE-->
        <h3 class="text-center">Horario tarde</h3>
        <hr>
        <div class="form-group">
          <label class="col-md-2">Hora de inicio:</label>
          <div class="col-md-2">
            <div class="input-group bootstrap-timepicker timepicker">
                <input required id="timepicker3" type="text" class="form-control input-small" name="horainiciot">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>
          </div>
          <label class="col-md-2 col-md-offset-1">Hora de fin:</label>
          <div class="col-md-2">
            <div class="input-group bootstrap-timepicker timepicker">
                <input required id="timepicker4" type="text" class="form-control input-small" name="horafint">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>
          </div>
        </div>
        <hr>
        <br>
        <!--INICIO INTERVALO-->
        <div class="form-group">
          <label class="col-md-2">Intervalo:</label>
          <div class="col-md-1 selector">
            <select required name="intervalo" class="col-md-12" required>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="25">25</option>
              <option value="30">30</option>
              <option value="35">35</option>
              <option value="40">40</option>
              <option value="45">45</option>
              <option value="50">50</option>
              <option value="55">55</option>
              <option value="60">60</option>
            </select>
          </div>
          <label class="col-md-1 ">minutos.</label>
        </div>
        <hr>
        <br>
        <!--FECHA INICIO-->
        <div class="form-group">
          <label class="col-md-2">Fecha de inicio:</label>
          <div class="col-md-3"> 
            <input required type="text" id="fechainicio" gldp-id="fechainicio" class="form-control" name="fechainicio" readonly/>
          </div> 
          <label class="col-md-2">Fecha de fin:</label>
          <div class="col-md-3"> 
            <input required type="text" id="fechafin" gldp-id="fechafin" class="form-control" name="fechafin" readonly/>
          </div>             
        </div>
        <!--FIN FECHA INICIO-->
        <div class="clearfix">
          <input class="btn btn-success pull-left" type="submit" value="Guardar Agenda" />
        </div>
      </form>
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('#timepicker1').timepicker();
      $('#timepicker2').timepicker();
      $('#timepicker3').timepicker();
      $('#timepicker4').timepicker();
      $('#fechainicio').glDatePicker({showAlways: true,selectedDate: new Date(),dowOffset: 1});
      $('#fechafin').glDatePicker({showAlways: true,selectedDate: new Date(),dowOffset: 1});
      var formulario = $('#agenda');
      formulario.on('submit',function(e){ 
        e.preventDefault();
        if ($('input[type=checkbox]:checked').length === 0){
          alert("Se debe seleccionar al menos un día de la semana");
        }else{
          if($('#fechainicio').val()!="" || $('#fechafin').val()!=""){
            var guardando;
            guardando = '<div class="guardar"><h4 class="text-center">Guardando</h4><img src="<?= base_url(); ?>bootstrap/css/images/ajax-loader.gif" alt="Cargando datos" class="center-block"/></div>';
            $('.container-fluid').html(guardando);
            $.post(
                "<?= base_url('admin/crear_agenda'); ?>",
                formulario.serialize(),
                function(respuesta){
                    location.reload();
            });
          }else{
            alert("Debe ingresar una fecha de inicio y fin");
          }
        }
      });
    });
  </script>
</body>
</html>