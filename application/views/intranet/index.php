<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido a nutra.cl</title>
    <link href="<?= base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
        <div class="container-fluid">
            <div class="container">
                <?php if($login_admin){ ?>
                <button class="btn btn-primary center-block volver">Volver al área de administración</button>
                <?php } ?>
            	<a href="<?= base_url(); ?>intranet"><img src="<?= base_url(); ?>bootstrap/css/images/logo.png" class="img-responsive center-block" /></a>
            	<div class="row">
            		<div class="col-md-12 col-md-offset-1">                         
                        <div class="col-md-2 borde col-md-offset-4" >
                            <a href="<?= base_url(); ?>intranet/agendar">
                            <img src="<?= base_url(); ?>bootstrap/css/images/menu/agendar.png" class="img-responsive" /> 
                            <h5 class="text-center">Agendar Hora</h5></a>
                        </div> 
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/user">
                				<img src="<?= base_url(); ?>bootstrap/css/images/menu/datos_generales_.png" class="img-responsive" />
                				<h5 class="text-center">Datos Generales</h5>
                            </a>
            			</div>
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/mediciones">
            				<img src="<?= base_url(); ?>bootstrap/css/images/menu/mediciones.png" class="img-responsive" />
            				<h5 class="text-center">Mediciones</h5> </a>
            			</div>
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/habitos_de_alimentacion">
            				<img src="<?= base_url(); ?>bootstrap/css/images/menu/habitos.png" class="img-responsive" /> 
            				<h5 class="text-center">Hábitos de Alimentación</h5></a>
            			</div>
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/estilos_de_vida">
            				<img src="<?= base_url(); ?>bootstrap/css/images/menu/estilo_vida.png" class="img-responsive" />
            				<h5 class="text-center">Estilo de Vida</h5></a> 
            			</div>
            		</div>
            	</div>
            	<br>
            	<br>
            	<div class="row">
            		<div class="col-md-12 col-md-offset-1">    			
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/datos_clinicos">
            				<img src="<?= base_url(); ?>bootstrap/css/images/menu/datos_clinicos.png" class="img-responsive" /> 
            				<h5 class="text-center">Datos Clinicos</h5></a>
            			</div>
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/examenes">
            				<img src="<?= base_url(); ?>bootstrap/css/images/menu/examenes.png" class="img-responsive" /> 
            				<h5 class="text-center">Examenes</h5></a>
            			</div>
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/signos_vitales">
            				<img src="<?= base_url(); ?>bootstrap/css/images/menu/signos_vitales.png" class="img-responsive" />
            				<h5 class="text-center">Signos Vitales</h5> </a>
            			</div>
            			<div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/actividad_fisica">
            				<img src="<?= base_url(); ?>bootstrap/css/images/menu/actividad_fisica.png" class="img-responsive" /> 
            				<h5 class="text-center">Actividad Física</h5></a>
            			</div>
                        <div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/informes">
                            <img src="<?= base_url(); ?>bootstrap/css/images/menu/informes.png" class="img-responsive" /> 
                            <h5 class="text-center">Informes</h5></a>
                        </div>             			
            		</div>
            	</div>
            	<br>
            	<br>
            	<div class="row">
            		<div class="col-md-12 col-md-offset-1">
                        <div class="col-md-2 borde" >
                            <a href="<?= base_url(); ?>intranet/cerrar_sesion">
                            <img src="<?= base_url(); ?>bootstrap/css/images/menu/off.png" class="img-responsive" />
                            <h5 class="text-center">Cerrar sesión</h5> </a>
                        </div>
            		</div>
            	</div>            	
            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script> 
    <script type="text/javascript">
    $(document).ready(function(){
        $('.volver').on('click',function(){
            $(location).attr('href','<?php echo base_url(); ?>admin/usuarios');
        });
    });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/579abadad2d8e3987f8b842c/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->	
</body>
</html>