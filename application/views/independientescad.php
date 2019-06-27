<!DOCTYPE html>
<html>
     <head>
			<title>Aplicación para arrendar propiedad - Trabajador independiente con aval dependiente</title>
			<meta name="viewport" content="width:device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1.0">
			<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
			<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		</head>
     <body>
     <br />
	<div class="main">
		<div class="logo text-center">
			<img src="<?php echo base_url(); ?>assets/img/karlaarriendalogo.jpg" width="30%">
		</div>
		<form method="post" id="validate-form" action="<?php echo base_url(); ?>index.php/independientescad/send" enctype="multipart/form-data">
			<div class="container">
				<!-- Alert when file is not valid or another alert -->
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

					<div class="row">
						<div class="col-lg-5 col-md-6 col-12">
							<label class="h6">Dirección de la propiedad que está postulando<span class="obligatorio">*</span></label>
							<input type="text" name="address" id="address" class="form-control" required />	
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label class="h6">Correo electrónico<span class="obligatorio">*</span></label>
							<input type="email" name="email" id="email" class="form-control" required />
						</div>
					</div>
					<!-- CARGA DE DATOS PERSONA 1-->
					<div class="text col-12 text-center">
						<div class="h2">___</div>
						<div class="h3">Datos personales</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<label>Nombre <span class="obligatorio">*</span></label>
							<input type="text" name="name" id="name" minlength="2" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Apellidos <span class="obligatorio">*</span></label>
							<input type="text" name="lastname" id="lastname" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Nacionalidad <span class="obligatorio">*</span></label>
							<input type="text" name="nationality" id="nationality" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>N° Documento de identificación <span class="obligatorio">*</span></label>
							<input type="text" name="id" id="id" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Fecha de nacimiento <span class="obligatorio">*</span></label>
							<input type="date" name="birthdate" id="bithdate" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Número de teléfono <span class="obligatorio">*</span></label>
							<input type="text" name="mobile" id="mobile" class="form-control" pattern="\d*" required />
						</div>
					</div>
					<!-- CARGA DE DOCUMENTOS PERSONA 1 -->
					<div class="text col-12 text-center">
						<div class="h2">___</div>
						<div class="h3">Documentos personales</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p class="alert-personal alert-info text-center">Importante:<span class="normal"> Sólo puede cargar archivos en formato PDF<span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">RUT por ambos lados<span class="obligatorio">*</span></div>
							<label for="file-upload" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Boletas de honorarios (6 últimos meses)<span class="obligatorio">*</span></div>
							<label for="file-upload-2" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-2" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Documento constitución de empresa<span class="obligatorio">*</span></div>
							<label for="file-upload-3" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
              <input id="file-upload-3" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
              <div class="info pt-3"></div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Dicom Platinum 360 empresa<span class="obligatorio">*</span></span></div>
							<label for="file-upload-4" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-4" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Dicom Platinum 360 personal<span class="obligatorio">*</span></span></div>
							<label for="file-upload-5" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-5" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Declaración de IVA (6 últimos meses)<span class="obligatorio">*</span></span></div>
							<label for="file-upload-6" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-6" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
						</div>
					</div>
					<hr>
					<!-- CARGA DE DATOS PERSONA 2-->
					<div class="text col-12 text-center">
						<div class="h2">___</div>
						<div class="h3">Datos del aval</div>
					</div>
						
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<label>Nombre <span class="obligatorio">*</span></label>
							<input type="text" name="name2" id="name2" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Apellidos <span class="obligatorio">*</span></label>
							<input type="text" name="lastname2" id="lastname2" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Nacionalidad <span class="obligatorio">*</span></label>
							<input type="text" name="nationality2" id="nationality2" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>N° Documento de identificación <span class="obligatorio">*</span></label>
							<input type="text" name="id2" id="id2" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Fecha de nacimiento <span class="obligatorio">*</span></label>
							<input type="date" name="birthdate2" id="birthday2" class="form-control" required />
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<label>Número de teléfono <span class="obligatorio">*</span></label>
							<input type="text" name="mobile2" id="mobile2" class="form-control" pattern="\d*" required />
						</div>
					</div>
					<!-- CARGA DE DOCUMENTOS PERSONA 2-->
					<div class="text col-12 text-center">
						<div class="h2">___</div>
						<div class="h3">Documentos del aval</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p class="alert-personal alert-info text-center">Importante:<span class="normal"> Sólo puede cargar archivos en formato PDF<span></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">RUT por ambos lados<span class="obligatorio">*</span></div>
							<label for="file-upload-7" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-7" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Certificado de cotizaciones AFP<span class="obligatorio">*</span></div>
							<label for="file-upload-8" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-8" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">3 Últimas liquidaciones de sueldo<span class="obligatorio">*</span></div>
							<!-- Primer archivo -->
							<label for="file-upload-9" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-9" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-1"></div>
							<!-- Segundo archivo -->
							<label for="file-upload-10" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-10" class="file-upload-optional" type="file" style='display: none;' name="userfile[]" accept=".pdf"/>
							<div class="info pt-1"></div>
							<!-- Tercer archivo  -->
							<label for="file-upload-11" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-11" class="file-upload-optional" type="file" style='display: none;' name="userfile[]" accept=".pdf"/>
							<div class="info pt-1"></div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Dicom Platinum 360<span class="obligatorio">*</span></span></div>
							<label for="file-upload-12" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-12" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<div class="subtitle pb-2">Contrato de trabajo o Certificado de antigüedad laboral<span class="obligatorio">*</span></div>
							<label for="file-upload-13" class="subir"><i class="fas fa-cloud-upload-alt"></i> Seleccione PDF</label>
							<input id="file-upload-13" class="file-upload-required" type="file" style='display: none;' name="userfile[]" accept=".pdf" required/>
							<div class="info pt-3"></div>
						</div>
					</div>
					<hr>
				</div>
			<div class="container">
					<div class="row">
						<div class="col-12">
							<p class="text-center">Importante:<span class="normal"> Sólo podrá enviar su solicitud cuando haya cargado los documentos obligatorios<span></p>
						</div>
					</div>
				<div class="row">
					<div class="form-group col-12 text-center">
              <button name="submit" class="btn btn-secondary btn-send" id="btn-send">Enviar solicitud </button>
          </div>
				</div>
			</div>
		</form>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/additional-methods.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/validations-new.js"></script>
	</body>
</html>