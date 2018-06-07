<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Registro</title>
</head>
<body>
	<div class="wrapper-register">
		<img class="icon-logo" src="css/img/icon-logo.png">
		<a href="Index.php" style="text-decoration: none;"><p class="brand-name">Juicy</p></a>	
		<form  action="Excess.php" method="POST">
			<input type="text"     name="user"  placeholder="Expediente"  class="data"><br>
			<select name="uni"  class="data">
			<option value="null">Universidades</option>
			</select><br>
			<input type="text" 	   name="email" placeholder="E-mail"      class="data"><br>
			<input type="password" name="pass"  placeholder="Contraseña"  class="data"><br>
			<input type="submit"   name="submit" value="register" class="button-session">
		</form>
	</div>
</body>
</html>