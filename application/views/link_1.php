<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario Karlaarrienda</title>
</head>
<body>
     <h1>Extranjeros sin rut</h1>
     <form action="sendmail.php" method="post">
          <input type="text" name="nombre" placeholder="Introduce tu nombre">
          <br>
          <input type="text" name="apellidos" placeholder="Introduce tus apellidos">
          <br>
          <input type="email" name="correo" placeholder="Introduce tu correo">
          <br>
          <input type="file" name="archivo">
          <br>
          <input type="submit" value="Enviar" name="submit">
     </form>
</body>
</html>