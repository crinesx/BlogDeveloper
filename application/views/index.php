<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Diabemedica</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php echo base_url();?>static\bootstrap\css\stylev2.css">
      <link rel="stylesheet" href="<?php echo base_url();?>static\bootstrap\css\bootstrap.min.css">
</head>

<body class="container">

	<div class="wraper">
		<h1 class="font-weight-light text-white" >Diabemedica</h1>

		<form class="form" method="post" action="<?php echo base_url();?>index.php/welcome/validaLogin">
			<input id="user" name="user" type="text" placeholder="Usuario">
			<input id="pasw" name="pasw"  type="password" placeholder="Contraseña">
			<button type="submit" id="login-button">Acceder</button>
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

	</ul>






</body>

</html>
