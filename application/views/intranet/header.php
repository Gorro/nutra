<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido a nutra.cl</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url(); ?>bootstrap/css/estilo.css" rel="stylesheet">
    <link href="<?= base_url(); ?>bootstrap/css/animate.css" rel="stylesheet">
    <link href="<?= base_url(); ?>bootstrap/css/bootstrap-slider.css" rel="stylesheet">    
    
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>    
    <script src="<?= base_url(); ?>bootstrap/js/bootstrap.js"></script> 
    <style>
        body{
            font-family: 'Raleway', sans-serif;
        }
        h6{
            word-wrap: break-word;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            -o-hyphens: auto;
            hyphens: auto;
        }
        .borde{
            cursor: pointer;
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px; 
            border: 0px solid #000000;
            margin: 5px;
            background-color: #e4e9eb;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
        }
        .borde:hover{
            -webkit-box-shadow: 6px 4px 5px 0px rgba(50, 50, 50, 0.75);
            -moz-box-shadow:    6px 4px 5px 0px rgba(50, 50, 50, 0.75);
            box-shadow:         6px 4px 5px 0px rgba(50, 50, 50, 0.75);         
        }
    </style>
</head>
<body>
    <div id="page-wrapper">
        <?php if($login_admin){ ?>
        <button class="btn btn-primary center-block volver">Volver al área de administración</button>
        <?php } ?>
        <a href="<?= base_url(); ?>intranet"><img src="<?= base_url(); ?>bootstrap/css/images/logo.png" class="img-responsive center-block" /></a>
        <div class="row">
            <div class="col-md-12">
                <a href="<?= base_url(); ?>intranet/agendar"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/agendar.png" class="img-responsive" /> 
                    <h6 class="text-center hidden-xs hidden-sm">Agendar Hora</h6>
                </div></a>
                <a href="<?= base_url(); ?>intranet/user"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/datos_generales_.png" class="img-responsive" />
                    <h6 class="text-center hidden-xs hidden-sm">Datos Generales</h6>
                </div></a>
                <a href="<?= base_url(); ?>intranet/mediciones"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/mediciones.png" class="img-responsive" />
                    <h6 class="text-center hidden-xs hidden-sm">Mediciones</h6> 
                </div></a>
                <a href="<?= base_url(); ?>intranet/habitos_de_alimentacion"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/habitos.png" class="img-responsive" /> 
                    <h6 class="text-center hidden-xs hidden-sm">Hábitos de Alimentación</h6>
                </div></a>                
                <a href="<?= base_url(); ?>intranet/estilos_de_vida"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/estilo_vida.png" class="img-responsive" />
                    <h6 class="text-center hidden-xs hidden-sm">Estilo de Vida</h6> 
                </div></a>
                <a href="<?= base_url(); ?>intranet/datos_clinicos"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/datos_clinicos.png" class="img-responsive" /> 
                    <h6 class="text-center hidden-xs hidden-sm">Datos Clinicos</h6>
                </div></a>
                <a href="<?= base_url(); ?>intranet/examenes"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/examenes.png" class="img-responsive" /> 
                    <h6 class="text-center hidden-xs hidden-sm">Examenes</h6>
                </div></a>
                <a href="<?= base_url(); ?>intranet/signos_vitales"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/signos_vitales.png" class="img-responsive" />
                    <h6 class="text-center hidden-xs hidden-sm">Signos Vitales</h6> 
                </div></a>
                <a href="<?= base_url(); ?>intranet/actividad_fisica"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/actividad_fisica.png" class="img-responsive" /> 
                    <h6 class="text-center hidden-xs hidden-sm">Actividad Física</h6>
                </div></a>
                <a href="<?= base_url(); ?>intranet/informes"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/informes.png" class="img-responsive" /> 
                    <h6 class="text-center hidden-xs hidden-sm">Informes</h6>
                </div></a>
                <a href="<?= base_url(); ?>intranet/cerrar_sesion"><div class="col-xs-2 col-sm-1 borde" >
                    <img src="<?= base_url(); ?>bootstrap/css/images/menu/off.png" class="img-responsive" />
                    <h6 class="text-center hidden-xs hidden-sm">Cerrar sesión</h6> 
                </div></a>
            </div>
        </div>                  
    </div>
    <!-- MENU -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('.volver').on('click',function(){
            $(location).attr('href','<?php echo base_url(); ?>admin/usuarios');
        });
    });
    </script>