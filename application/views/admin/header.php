<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Administracion-nutra.cl</title>
    <link href="<?= base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url(); ?>bootstrap/css/estilo.css" rel="stylesheet">
    <link href="<?= base_url(); ?>bootstrap/css/animate.css" rel="stylesheet">    
    <link href="<?= base_url(); ?>bootstrap/css/fileinput.css" rel="stylesheet"> 
    <link href="<?= base_url(); ?>bootstrap/calendario/styles/glDatePicker.flatwhite.css" rel="stylesheet">
    <link href="<?= base_url(); ?>bootstrap/tiempo/css/timepicker.less" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-top " role="navigation">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand trans1 " href="#">Área de administración</a>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav ">
          <li><a href="<?= base_url('admin/usuarios'); ?>" class="trans1 video">Ver usuarios <span class="glyphicon glyphicon-user"></span></a></li>
          <li><a href="<?= base_url('admin/nueva_agenda'); ?>" class="trans1 video">Crear Agenda <span class="glyphicon glyphicon-list-alt"></span></a></li> 
          <li><a href="<?= base_url('admin/ver_lista'); ?>" class="trans1 video">Ver Horas <span class="glyphicon glyphicon-time"></span></a></li>           
          <li><a href="<?= base_url('admin/insertar_administrador'); ?>">Crear administrador <span class="glyphicon glyphicon-asterisk"></span></a></li>
          <li><a href="<?= base_url('admin/cerrar_sesion'); ?>" class="trans1 sonido">Cerrar sesión <span class="glyphicon glyphicon-off"></span></a></li>
        </ul>
      </div>
    </nav>