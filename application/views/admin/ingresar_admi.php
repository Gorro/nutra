<div class="container-fluid">
	<h2 class="text-center">Ingresar nuevo administrador</h2>
	<hr>
	<form class="form-horizontal col-md-offset-2"  enctype="multipart/form-data" action="" method="post" id="admin">
		<div class="form-group">
            <label class="col-md-2">Email administrador</label>
            <div class="col-md-5">         
                <input type="mail" class="form-control" name="mail"  placeholder="Ingresar email" required>             
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">Ingresar contraseña</label>
            <div class="col-md-5">         
                <input type="password" class="form-control" name="pass"  placeholder="Ingrese contraseña" required id="pass">             
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">Reingresar contraseña</label>
            <div class="col-md-5">         
                <input type="password" class="form-control" name="repass"  placeholder="Reingrese contraseña" required id="repass">             
            </div>
        </div>
        <div class="clearfix"></div> 
        <input type="submit" value="Guardar" class="btn btn-success">       
	</form>
	<hr>
</div>
 <script src="<?= base_url(); ?>bootstrap/js/jquery-2.1.3.min.js"></script>    
    <script src="<?= base_url(); ?>bootstrap/js/bootstrap.js"></script>  
<script>
	$(document).ready(function(){
        var formulario = $('#admin');
        formulario.on('submit',function(e){
            e.preventDefault();
            if($('#repass').val()==$('#pass').val()){
                $.post(
                    "<?= base_url('admin/verificar_admin');?>",
                    formulario.serialize(),
                    function(respuesta){
                        if(respuesta){
                            $.post(
                            "<?= base_url('admin/insert_admin');?>",
                            formulario.serialize(),
                            function(){
                            	alert('Administrador creado con exito! :)');
                                location.reload();
                            }); 
                        }else
                            alert("Email ingresado ya es un administrador :(")                
                    }
                );
            }else
                alert("Se han introducido contraseñas distintas :(")
        });
    });
</script>