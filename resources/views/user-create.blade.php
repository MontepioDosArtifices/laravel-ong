<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="{{ route('user.create') }}" method="post">
  @csrf
  <input type="text" name="name" placeholder="Nome completo" required>
  <input type="text" name="cpf" placeholder="CPF" required>
  <input type="email" name="email" placeholder="E-mail" required>
  <input type="password" name="password" placeholder="Senha" required>
  <input type="password" name="password_confirmed" placeholder="Confirmar senha" required>
  <input type="submit" name="submit" value="Cadastrar">
</form>
</body>
</html>
