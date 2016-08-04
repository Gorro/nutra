<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login Admin nutra.cl</title>

		<!--STYLESHEETS-->
			<link href="<?= base_url(); ?>bootstrap/css/style_admin.css" rel="stylesheet" type="text/css" />

		<!--SCRIPTS-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
		<!--Slider-in icons-->
		<script type="text/javascript">
		$(document).ready(function() {
			$(".username").focus(function() {
				$(".user-icon").css("left","-48px");
			});
			$(".username").blur(function() {
				$(".user-icon").css("left","0px");
			});
			
			$(".password").focus(function() {
				$(".pass-icon").css("left","-48px");
			});
			$(".password").blur(function() {
				$(".pass-icon").css("left","0px");
			});
		});
		</script>
	</head>
	<body>
		<!--WRAPPER-->
		<div id="wrapper">

			<!--SLIDE-IN ICONS-->
		    <div class="user-icon"></div>
		    <div class="pass-icon"></div>
		    <!--END SLIDE-IN ICONS-->

			<!--LOGIN FORM-->
			<form name="login-form" class="login-form" id="form" action="" method="post">

				<!--HEADER-->
			    <div class="header">
			    <!--TITLE--><h1 class="text-center">Bienvenida</h1><!--END TITLE-->
			    <!--DESCRIPTION--><span>Bienvenida a la nutri mas rica del mundo mundial</span><!--END DESCRIPTION-->
			    </div>
			    <!--END HEADER-->
				
				<!--CONTENT-->
			    <div class="content">
				<!--USERNAME--><input name="user" type="text" class="input username" placeholder="Email" onfocus="this.value=''" /><!--END USERNAME-->
			    <!--PASSWORD--><input name="pass" type="password" class="input password" placeholder="Contraseña"  onfocus="this.value=''" /><!--END PASSWORD-->
			    </div>
			    <!--END CONTENT-->
			    
			    <!--FOOTER-->
			    <div class="footer">
			    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Ingresar" class="button" id="login-button" /><!--END LOGIN BUTTON-->
			    </div>
			    <!--END FOOTER-->

			</form>
			<!--END LOGIN FORM-->
		</div>
		<!--END WRAPPER-->

		<!--GRADIENT-->
		<div class="gradient"></div>
		<!--END GRADIENT-->
		<script>
        $(document).ready(function(){
            $("#login-button").click(function(event){
            event.preventDefault();
            var formulario = $('#form');
            $.post(
                    "<?= base_url('admin/form_login'); ?>",
                    formulario.serialize(),
                    function(respuesta){
                        if(respuesta == 'si'){
                            window.location.href ="<?= base_url('admin/usuarios'); ?>";
                        }
                        else
                            alert('Usuario o contraseña invalido.');
                    });             
            
            }); 
        });         
        </script> 
	</body>
</html>