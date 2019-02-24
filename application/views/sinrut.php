<!DOCTYPE html>
<html>
     <head>
          <title>How to Send an Email with Attachment in Codeigniter</title>
          <meta name="viewport" content="width:device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1.0">
          <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
          <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
     <body>
     <br />
     <!-- <div class="container">
          <div class="row">
               <div class="col-md-8" style="margin:0 auto; float:none;">
               <h3 class="title">How to Send an Email with Attachment in Codeigniter</h3>
               <br />
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
               <h4 class="subtitle">Programmer Register Here</h4>
               <br />
                    <form method="post" action="<?php echo base_url(); ?>/index.php/sendemail/send" enctype="multipart/form-data">
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label>Enter Name</label>
                                        <input type="text" name="name" placeholder="Enter Name" class="form-control" required />
                                   </div>
                                   <div class="form-group">
                                        <label>Enter Address</label>
                                        <textarea name="address" placeholder="Enter Address" class="form-control" required></textarea>
                                   </div>
                                   <div class="form-group">
                                        <label>Enter Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required />
                                   </div>
                                   <div class="form-group">
                                   <label>Select Programming Language</label>
                                        <select name="programming_languages[]" class="form-control" multiple required style="height:150px;">
                                             <option value=".NET">.NET</option>
                                             <option value="Android">Android</option>
                                             <option value="ASP">ASP</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label>Select Year of Experience</label>
                                        <select name="experience" class="form-control" required>
                                        <option value="">Select Experience</option>
                                        <option value="0-1 years">0-1 years</option>
                                        <option value="2-3 years">2-3 years</option>
                                        <option value="4-5 years">4-5 years</option>
                                        <option value="6-7 years">6-7 years</option>
                                        <option value="8-9 years">8-9 years</option>
                                        <option value="10 or more years">10 or more years</option>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label>Enter Mobile Number</label>
                                        <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control" pattern="\d*" required />
                                   </div>
                                   <div class="form-group">
                                        <label>Select Your Resume</label>
                                        <input type="file" name="userfile[]" accept=".doc,.docx, .pdf" required id="file_1"/>
                                   </div>
                                   <div class="form-group">
                                        <label>Select Your Resume</label>
                                        <input type="file" name="userfile[]" accept=".doc,.docx, .pdf" id="file_2"/>
                                   </div>
                                   <div class="form-group">
                                        <label>Select Your Resume</label>
                                        <input type="file" name="userfile[]" accept=".doc,.docx, .pdf" id="file_3"/>
                                   </div>
                                   <div class="form-group">
                                        <label>Select Your Resume</label>
                                        <input type="file" name="userfile[]" accept=".doc,.docx, .pdf" id="file_4"/>
                                   </div>
                                   <div class="form-group">
                                        <label>Select Your Resume</label>
                                        <input type="file" name="userfile[]" accept=".doc,.docx, .pdf" id="file_5"/>
                                   </div>
                                   <div class="form-group">
                                        <label>Select Your Resume</label>
                                        <input type="file" name="userfile[]" accept=".doc,.docx, .pdf" id="file_6"/>
                                   </div>
                                   <div class="form-group">
                                        <label>Select Your Resume</label>
                                        <input type="file" name="userfile[]" accept=".doc,.docx, .pdf" id="file_7"/>
                                   </div>
                                   <div class="form-group">
                                        <label>Enter Additional Information</label>
                                        <textarea name="additional_information" placeholder="Enter Additional Information" class="form-control" required rows="8"></textarea>
                                   </div>
                              </div>
                         </div>
                         <div class="form-group" align="center">
                              <input type="submit" name="submit" value="upload" class="btn btn-info" />
                         </div>
                    </form>
               </div>
          </div>
     </div> -->
	<div class="main">
		<form action="">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12 texto-center">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" required />
					</div>
					<div class="col-lg-4 col-md-6 col-12 texto-center">
						<label>Apellidos</label>
						<input type="text" name="lastname" class="form-control" required />
					</div>
				</div>
			</div>
		</form>
	</div>


     <div class="main">

			<section class="services" id="servicios">
				<div class="container">
					<div class="row">
						<div class="text col-12 text-center">
							<div class="h2">___</div>
							<div class="h1">SERVICIOS</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<img src="img/icon1.png" alt="">
							<p class="texto">EVENTOS</p>
							<p class="description">•<!-- Celebración / Premiación 
							•Lanzamientos <!-- •Motivación  -->•Eventos de Fidelización •Eventos de Relacionamiento •Workshops •Eventos Fuerza de Venta •Fiestas de Fin de Año y más ...</p>
						</div>

						<div class="col-lg-4 col-md-6 col-12 text-center">
							<img src="img/icon2.png" alt="">
							<p class="texto">TRADE MARKETING</p>
							<p class="description"><!-- Logramos generar campañas innovadoras que se traducen en incremento en ventas y awareness de marca.  -->•Promociones<!--  •Implementación Gráfica --> •Módulos •Campañas de Venta •Motivación Vendedores <!-- •Implementación PDV  -->•Campañas Generación de Demanda •Estrategias Incentivo Fuerza de Ventas y más ... <!-- •Diseño Elementos POS --></p>
						</div>

						<div class="col-lg-4 col-md-6 col-12 text-center">
							<img src="img/icon3.png" alt="">
							<p class="texto">FERIAS</p>
							<p class="description"><!-- Sabemos lo importante  de la imagen de tu empresa y es por eso que nos preocupamos de crear diseños y logros extraordinarios --> •Modulación de ferias •Diseño y construcción de stand •Mobiliario y equipamiento de servicios •Arquitectura corporativa.</p>
						</div>

						<div class="col-lg-4 col-md-6 col-12 text-center">
							<img src="img/icon4.png" alt="">
							<p class="texto">MERCHANDISING</p>
							<p class="description"><!-- Facilitamos en todos los requerimientos a nuestros cliente es por eso que generamos propuestas innovadoras en términos de regalos corporativos. --> •Pendrive •Menaje •Bolsos •Bolsas corporativas •Ropa corporativa •Lápices y llaveros •Pins •Lanyard y credenciales y mucho más..</p>
						</div>

						<div class="col-lg-4 col-md-6 col-12 text-center">
							<img src="img/icon5.png" alt="">
							<p class="texto">FFVV</p>
							<p class="description"><!-- Nos especializamos en crear espacios para formar los lideres que requiere tus áreas de trabajo y las cuales nos comprometimos al 100% para el logro de todos tus objetivos.  -->•Coaching empresarial •Neuroventas •Coaching de equipos o áreas de trabajo •Coaching deportivo •Coaching laboral •Coaching saludable</p>
						</div>
						
						<div class="col-lg-4 col-md-6 col-12 text-center">
							<img src="img/icon6.png" alt="">
							<p class="texto">BTL</p>
							<p class="description"><!-- Conceptos creativos, diseñados para generar un vínculo cercano entre los consumidores y las marcas: -->•Planificación •Definición Objetivos Comunicacionales •Análisis Consumidor Objetivo •Selección Canales •Determinación mecánicas de Interacción</p>
						</div>
					</div>
				</div>
			</section>

			
			<section class="ourwork-gallery" id="portafolio">
				<div class="container">
					<div class="row">
						<div class="text col-12 text-center">
							<div class="h2">___</div>
							<div class="h1">NUESTRO TRABAJO</div>
						</div>
						
						<div id="myModal" class="modal">
							<span class="close">&times;</span>
							<img class="modal-content" id="img01">
							<div id="caption"></div>
						</div>

						<div class="gallery" id="gallery">
							<div class="foto">
								<div class="descripcion">
									<img id="myImg" src="img/portfolio/evento1.jpg" alt="Lanzamiento Goodyear">
									<span>
										<p class="title">EVENTO</p>
										<p class="short-description">Lanzamiento Goodyear</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg2" src="img/portfolio/evento2.jpg" alt="Taller de coaching liderazgo y trabajar en equipo para globalvia<">
									<span>
										<p class="title">TALLER</p>
										<p class="short-description">Taller de coaching liderazgo y trabajar en equipo para globalvia</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg3" src="img/portfolio/evento3.jpg" alt="Merchandising para globalvia">
									<span>
										<p class="title">MERCHANDISING</p>
										<p class="short-description">Merchandising para globalvia</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg4" src="img/portfolio/evento4.png" alt="IDEAL">
									<span>
										<p class="title">STAND</p>
										<p class="short-description">IDEAL</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg5" src="img/portfolio/evento5.jpg" alt="Do Smart City Santiago 2018">
									<span>
										<p class="title">FERIA</p>
										<p class="short-description">Do Smart City Santiago 2018</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg6" src="img/portfolio/evento6.jpg" alt="Couching Neuroventas">
									<span>
										<p class="title">COACHING</p>
										<p class="short-description">Couching Neuroventas</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg7" src="img/portfolio/evento7.jpg" alt="Gala Oriflame Casino Monticello">
									<span>
										<p class="title">FIESTA</p>
										<p class="short-description">Gala Oriflame Casino Monticello</p>
									</span>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg8" src="img/portfolio/evento8.JPG" alt="Feria Do Smart City 2018<">
									<span>
										<p class="title">FERIA</p>
										<p class="short-description">Do Smart City Santiago 2018</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg9" src="img/portfolio/evento9.jpg" alt="Fiesta Aniversario">
									<span>
										<p class="title">EVENTO</p>
										<p class="short-description">Fiesta Aniversario</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg10" src="img/portfolio/evento10.jpg" alt="Activación Globalvia Hotel Sonesta">
									<span>
										<p class="title">ACTIVACIÓN</p>
										<p class="short-description">Activación Globalvia Hotel Sonesta</p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg11" src="img/portfolio/evento11.png" alt="ACTIVACIÓN">
									<span>
										<p class="title">ACTIVACIÓN</p>
										<p class="short-description"></p>
									</span>
								</div>
							</div>

							<div class="foto">
								<div class="descripcion">
									<img id="myImg12" src="img/portfolio/evento12.jpg" alt="Inauguración Peaje de Lampa Globalvia">
									<span>
										<p class="title">INAUGURACIÓN</p>
										<p class="short-description">Inauguración Peaje de Lampa Globalvia</p>
									</span>
								</div>
							</div>

						</div>

					</div>
				</div>
			</section>
			
			<section class="customers" id="clientes">
				<div class="container-fluid">
					<div class="row">
						<div class="text col-12 text-center">
							<div class="h2">___</div>
							<div class="h1">ELLOS SE ATREVIERON</div>
							<div class="h4">Algunos de nuestros clientes...</div>
						</div>
						<div class="carousel col-12">
							
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img class="d-block" src="img/clienteslogos/logos1.png" alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block" src="img/clienteslogos/logos2.png" alt="Second slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block" src="img/clienteslogos/logos3.png" alt="Third slide">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>

						</div>
					</div>
				</div>
			</section>	

			<section class="contact" id="contacto">
				<div class="container">
					<div class="row">
						<div class="text col-12 text-center">
							<div class="h2">___</div>
							<div class="h1">CONTACTO</div>
						</div>
						<div class="form col-md-8 col-12">
							<form action="" method="post">
								<div class="col-md-8">
									<label for="nombre">Nombre y Apellido*</label>
									<input type="text" class="form-control" id="nombre" name="nombre" value="">
								</div>

								<div class="col-md-8">
									<label for="empresa">Empresa*</label>
									<input type="text" class="form-control" id="empresa" name="empresa" value="">
								</div>

								<div class="col-md-8">
									<label for="correo">Email*</label>
									<input type="email" class="form-control" id="email" name="email" value="">
								</div>

								<div class="col-md-12">
									<label for="mensaje">Mensaje*</label>
									<textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="5"></textarea>
								</div>
								
								<div class="col-md-4">
									<input type="submit" name="submit" class="btn boton" value="Enviar">
								</div>
							</form>
						</div>
						<div class="contacto col-md-4 col-12 text-center">
							<img src="img/logocuadrate1.png" alt="Logo cuadrate">

								<div class="col-12 d-flex">
									<div class="col-md-3 col-4 icono">
										<img src="img/datos3.png" alt="">
									</div>
									<div class="col-md-9 col-8 texto">
										<p class="t1">Javier@cuadrate.cl</p>
									</div>
								</div>
								
								<div class="col-12 d-flex">
									<div class="col-md-3 col-4 icono">
										<img src="img/datos2.png" alt="">
									</div>
									<div class="col-md-9 col-8 texto">
										<p class="t1">+56 933848336</p>
									</div>
								</div>
									
								<div class="col-12 d-flex">
									<div class="col-md-3 col-4 icono">
										<img src="img/datos1.png" alt="">
									</div>
									<div class="col-md-9 col-8 texto">
										<p class="t1">Barros Borgoño 71 of 1105 Providencia</p>
									</div>
								</div>
						</div>
					</div>
				</div>
			</section>

		</div>
     </body> -->
</html>