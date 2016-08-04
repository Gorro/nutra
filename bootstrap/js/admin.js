var usuario = function(mail,direccion){
    $.post( direccion+"admin/mostrar_paciente",'mail='+mail,null)      
      .done(function( data) {
        $(location).attr('href',direccion+'intranet');
      });
  }
  var usuario2 = function(mail,direccion){
    $.post( direccion+"admin/mostrar_paciente",'mail='+mail,null);  
  }
    /*cargando = '<div class="guardar"><h4 class="text-center">Cargando</h4><img src="http://electrofonicos.com/nutra/bootstrap/css/images/477.gif" alt="Cargando datos" class="center-block"/></div>';
    $('#in-datos').html(cargando);
    $('#in-antecedentes').html(cargando);
    $('#in-mediciones').html(cargando);
    $('#in-habitos').html(cargando);
    $('#in-estilo').html(cargando);
    $('#in-ejercicio').html(cargando);
      $.post( direccion+"admin/mostrar_datos",'mail='+mail,null, "json" )      
      .done(function( data) {
        var codigo = '';
        if(data.datos){
            var telefono =(data.telefono==0) ? 'Sin información' : data.telefono;
            codigo  = '<p class="col-md-4">Nombre</p><p class="col-md-8">: '+data.nombre+'</p><div class="clearfix"></div>';
            codigo += '<hr><p class="col-md-4">Edad</p><p class="col-md-8">: '+data.fecha+'</p><div class="clearfix"></div>';
            codigo += '<hr><p class="col-md-4">Mail</p><p class="col-md-8">: '+data.mail+'</p><div class="clearfix"></div>';
            codigo += '<hr><p class="col-md-4">Teléfono</p><p class="col-md-8">: '+telefono+'</p><div class="clearfix"></div>';
            $('#in-datos').html(codigo);
        }
        if(data.antecedentes){
            var medicamentos =(data.medicamentos==null) ? 'Sin información' : data.medicamentos;
            var cirugia =(data.cirugia==null) ? 'Sin información' : data.cirugia;
            var otra_enfermedad = (data.otra==null) ? 'Sin información' : data.otra;
            codigo  = '<p class="col-md-4">Enfermedad<p class="col-md-8">: '+data.enfermedades+'</p><div class="clearfix"></div>';
            codigo += '<hr><p class="col-md-4">Otra Enfermedad<p class="col-md-8">: '+otra_enfermedad+'</p><div class="clearfix"></div>'
            codigo += '<hr><p class="col-md-4">Medicamentoss<p class="col-md-8">: '+medicamentos+'</p><div class="clearfix"></div>';
            codigo += '<hr><p class="col-md-4">Cirugia gástrica<p class="col-md-8">: '+cirugia+'</p><div class="clearfix"></div>';
        $('#in-antecedentes').html(codigo);
        $('.listatabs').eq(1).removeClass('hide');
        }else
            $('.listatabs').eq(1).addClass('hide');
        if(data.estilo){
        codigo  = '<p class="col-md-4">Ocupación<p class="col-md-8">: '+data.ocupacion+'</p><div class="clearfix"></div>';
        codigo += '<hr><p class="col-md-4">Tendencia alimentaria<p class="col-md-8">: '+data.tendencia+'</p><div class="clearfix"></div>'
        codigo += '<hr><p class="col-md-4">Fuma<p class="col-md-8">: '+data.fuma+'</p><div class="clearfix"></div>';
        codigo += '<hr><p class="col-md-4">Consume alcohol<p class="col-md-8">: '+data.alcohol+'</p><div class="clearfix"></div>';
        $('#in-estilo').html(codigo);
        $('.listatabs').eq(2).removeClass('hide');
        }else
            $('.listatabs').eq(2).addClass('hide');
        if(data.mediciones){
        codigo  = '<p class="col-md-4">Estatura</p><p class="col-md-8">: '+data.estatura+'</p><div class="clearfix"></div>';
        codigo += '<hr><p class="col-md-4">Peso actual</p><p class="col-md-8">: '+data.peso+'</p><div class="clearfix"></div>';
        codigo += '<hr><p class="col-md-4">Contextura física</p><p class="col-md-8">: '+data.muneca+'</p><div class="clearfix"></div>';
        codigo += '<hr><p class="col-md-4">IMC</p><p class="col-md-8"> : '+data.imc+'</p><div class="clearfix"></div>';
        if(data.cintura !=null){
            codigo += '<hr><p class="col-md-4">Circunferencia de cintura</p><p class="col-md-8"> : '+data.cintura+'</p><div class="clearfix"></div>';
            codigo += '<hr><p class="col-md-4">Riesgo cardiovascular</p><p class="col-md-8">: '+data.riesgo+'</p><div class="clearfix"></div>';
        }else{
            codigo += '<hr><p class="col-md-4">Circunferencia de cintura</p><p class="col-md-8"> : Sin información</p><div class="clearfix"></div>';
            codigo += '<hr><p class="col-md-4">Riesgo cardiovascular</p><p class="col-md-8">: Sin información</p><div class="clearfix"></div>';
        }
        var pagua =(data.pagua==null || data.pagua==0) ? 'Sin información' : data.pagua;
        var pgrasa =(data.pgrasa==null || data.pagua==0) ? 'Sin información' : data.pgrasa;
        var kmusculo =(data.kmusculo==null || data.pagua==0) ? 'Sin información' : data.kmusculo;
        var tmb =(data.tmb==null || data.pagua==0) ? 'Sin información' : data.tmb;     
        codigo += '<hr><p class="col-md-4">% Agua</p><p class="col-md-8"> : '+pagua+'</p><div class="clearfix"></div>'
        codigo += '<hr><p class="col-md-4">% Grasa</p><p class="col-md-8">: '+pgrasa+'</p><div class="clearfix"></div>';
        codigo += '<hr><p class="col-md-4">kg Musculo</p><p class="col-md-8">: '+kmusculo+'</th></tr>';
        codigo += '<hr><p class="col-md-4">Tasa metabolca basal</p><p class="col-md-8"> : '+tmb+'</p><div class="clearfix"></div>'
        $('#in-mediciones').html(codigo);
        $('.listatabs').eq(3).removeClass('hide');
        }else
            $('#listatabs').eq(3).addClass('hide');
        if(data.habitos){
        codigo  = '<p class="col-md-4">Agua</p><p class="col-md-8">: '+data.agua+'</p><div class="clearfix"></div>';
        codigo += '<p class="col-md-4">Liquidos<p class="col-md-8">: '+data.liquidos+'</p><div class="clearfix"></div>'
        codigo += '<p class="col-md-4">Cereales<p class="col-md-8">: '+data.cereales+'</p><div class="clearfix"></div>';
        codigo += '<p class="col-md-4">Frutas<p class="col-md-8">: '+data.frutas+'</p><div class="clearfix"></div>';        
        codigo += '<p class="col-md-4">Verduras<p class="col-md-8">: '+data.verduras+'</p><div class="clearfix"></div>'
        codigo += '<p class="col-md-4">Lacteos y derivados<p class="col-md-8">: '+data.lacteosyderivados+'</p><div class="clearfix"></div>';
        codigo += '<p class="col-md-4">Embutidos y comida rapida<p class="col-md-8">: '+data.embutidosycomidarapida+'</p><div class="clearfix"></div>';
        codigo += '<p class="col-md-4">Carnes y pescados<p class="col-md-8">: '+data.carnesavespescados+'</p><div class="clearfix"></div>'
        codigo += '<p class="col-md-4">Legumbres<p class="col-md-8">: '+data.legumbres+'</p><div class="clearfix"></div>';
        codigo += '<p class="col-md-4">Aceites<p class="col-md-8">: '+data.aceites+'</p><div class="clearfix"></div>';        
        codigo += '<p class="col-md-4">Alimentos grasos<p class="col-md-8">: '+data.alimentosgrasos+'</p><div class="clearfix"></div>';      
        codigo += '<p class="col-md-4">Huevos<p class="col-md-8">: '+data.huevos+'</p><div class="clearfix"></div>';      
        codigo += '<p class="col-md-4">Azucar y pasteleria<p class="col-md-8">: '+data.azucarespasteleria+'</p><div class="clearfix"></div>';
        $('#in-habitos').html(codigo);
        $('.listatabs').eq(4).removeClass('hide');  
        }else
            $('.listatabs').eq(4).addClass('hide');
        if(data.ejercicio){
        codigo  = '<p class="col-md-4">Realiza ejercicio<p class="col-md-8">: '+data.actividad+'</p><div class="clearfix"></div>';
            if(data.actividad!='No'){
                var actividadfisica =(data.actividadfisica==null) ? 'Sin información' : data.actividadfisica;
                var intensidad =(data.intensidad==null) ? 'Sin información' : data.intensidad;
                codigo += '<hr /><p class="col-md-4">Tipo de ejercicio<p class="col-md-8">: '+actividadfisica+'</p><div class="clearfix"></div>'
                codigo += '<hr /><p class="col-md-4">Días a la semana<p class="col-md-8">: '+data.duracionsemana+'</p><div class="clearfix"></div>';
                codigo += '<hr /><p class="col-md-4">Tiempo de ejercicio<p class="col-md-8">: '+data.duracionhoras+'</p><div class="clearfix"></div>';
                codigo += '<hr /><p class="col-md-4">Intensidad<p class="col-md-8">: '+intensidad+'</p><div class="clearfix"></div>';
            }
            $('#in-ejercicio').html(codigo);
            $('.listatabs').eq(5).removeClass('hide');
        }else
            $('listatabs').eq(5).addClass('hide');
      })
      .fail(function( jqXHR, textStatus, errorThrown ) {
        if ( console && console.log ) {
            console.log( "La solicitud a fallado: " +  textStatus);
        }
      }); 
        $('.nav-tabs li').removeClass('active');
        $('.nav-tabs li').first().addClass('active');
        $('.tab-pane').removeClass('active in');
        $('.tab-pane').first().addClass('active in');                            
    	$('#imagen_contextura').modal({show:true});
    }*/