<!DOCTYPE html>
<html>
     <head>
          <title>How to Send an Email with Attachment in Codeigniter</title>
          <meta name="viewport" content="width:device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1.0">
          <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
          <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
          <link rel="stylesheet" href="<?php site_url('../assets/css/bootstrap.css'); ?>">
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/estilos.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
     </head>
     <style>
          .title{
               color: #000;
               text-align: center;
          }
          .subtitle{
               text-align: center;
          }
     </style>
     <body>
     <br />
     <div class="container">
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
     </div>
     </body>
</html>