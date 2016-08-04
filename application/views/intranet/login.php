<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Intranet Nutra</title>   
        <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/style.css">   
    </head>

    <body>
        <div class="wrapper">
        <div class="container">
        <h1>Bienvenid@</h1>
        <form id="form" method="post">
            <input type="text" placeholder="Mail" name="user">
            <input type="password" placeholder="Password" name="pass">
            <button type="submit" id="login-button">Entrar</button>
        </form>
        </div>
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="<?php echo base_url() ?>bootstrap/js/index.js"></script>  
        <script>
        $(document).ready(function(){
            $("#login-button").click(function(event){
            event.preventDefault();
            var formulario = $('#form');
            $.post(
                    "<?= base_url('intranet/form_login'); ?>",
                    formulario.serialize(),
                    function(respuesta){
                        if(respuesta == 'si'){
                            $('form').fadeOut(500);
                            $('.wrapper').addClass('form-success');
                            window.location.href ="<?= base_url('intranet'); ?>";
                        }
                        else
                            alert('Usuario o contraseña invalido.');
                    });             
            
            }); 
        });         
        </script> 
    </body>
</html>
