<!DOCTYPE html>
<html>
     <head>
          <title>Aplicación para arrendar propiedad - Trabajador dependiente con aval dependiente</title>
          <meta name="viewport" content="width:device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1.0">
          <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
     <body>
     <br />
	<div class="main">
		<div class="logo text-center">
			<img src="<?php echo base_url(); ?>assets/img/karlaarriendalogo.jpg" width="30%">
		</div>
		<form method="post" enctype="multipart/form-data">
			<div class="container">
                    <div class="col-12">
					<?php
						if($this->session->flashdata("message"))
						{
						echo "
						<div class='alert alert-success'>
						".$this->session->flashdata("message")."
						</div>
						";
						}
					?>
				</div>
				<div class="row-karla">
                         <div class="title h6 pb-3">Seleccione el aval de acuerdo a su tipo de usuario:</div>
                         
                         <div class="form-group pt-2">
                              <label>Soy trabajador dependiente</label>
                              <select onchange="if (this.value) window.location.href=this.value" class="form-control">
                              <option value="">Seleccione tipo de aval</option>
                              <option value="<?php echo base_url(); ?>index.php/dependientescad">Aval que es un trabajador dependiente</option>
                              <option value="<?php echo base_url(); ?>index.php/dependientescaind">Aval que es un trabajador independiente</option>
                              </select>
                         </div>
                         
                         <div class="form-group pt-2">
                              <label>Soy trabajador independiente</label>
                              <select onchange="if (this.value) window.location.href=this.value" class="form-control">
                              <option value="">Seleccione tipo de aval</option>
                              <option value="<?php echo base_url(); ?>index.php/independientescad">Aval que es un trabajador dependiente</option>
                              <option value="<?php echo base_url(); ?>index.php/independientescaind">Aval que es un trabajador independiente</option>
                              </select>
                         </div>
                              
                         <div class="form-group pt-2">
                              <label>Soy extranjero recién llegado a Chile</label>
                              <select onchange="if (this.value) window.location.href=this.value" class="form-control">
                              <option value="">Seleccione tipo de aval</option>
                              <option value="<?php echo base_url(); ?>index.php/sinrut">Aval con mismas condiciones</option>
                              <option value="<?php echo base_url(); ?>index.php/extcad">Aval que es un trabajador dependiente</option>
                              <option value="<?php echo base_url(); ?>index.php/extcai">Aval que es un trabajador independiente</option>
                              </select>
                         </div>
                                   
                         <div class="row">
                              <div class="col-12">
                                   <p class="alert-seleccionarusuario alert-personal alert-info text-center"><span class="normal">Una vez seleccionada su opción se le enviará al formulario correspondiente<span></p>
                              </div>
                         </div>
				</div>
		</form>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/additional-methods.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/validations.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/inputchange.js"></script>
	</body>
</html>