<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Associação Beneficente MontePio dos Artífices">
  <meta name="description" content="">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/restrita.css">

	<script src="js/jquery.min.js"></script>

  <link rel="icon" href="images/favicon/favicon.png" sizes="16x16">
  <link rel="icon" href="images/favicon/favicon-32.png" sizes="32x32">
  <link rel="icon" href="images/favicon/favicon-48.png" sizes="48x48">
  <link rel="icon" href="images/favicon/favicon-64.png" sizes="64x64">
  <link rel="icon" href="images/favicon/favicon-128.png" sizes="128x128">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/favicon-apple-144.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/favicon-apple-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/favicon-apple-72.png">
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/favicon-apple-57.png">

  <title>Associação Beneficente MontePio dos Artífices</title>
</head>
<body>
	<div class="wrapper">
		<a href="#"><img src="images/logo.png" width="150px" alt="MontePio dos Artífices"></a>
		<div id="formContent">
			<form method="POST" action="">
				<input type="email" id="login" name="login" placeholder="E-mail" required>
				<input type="password" id="password" name="senha" placeholder="Senha" required>
				<input type="submit" value="Entrar">
			</form>
			<div id="formFooter">
				<a class="underlineHover" href="#">Esqueçi a senha</a>
			</div>
		</div>
	</div>
</body>
</html>
