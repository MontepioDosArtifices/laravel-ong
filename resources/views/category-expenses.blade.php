<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Categoria</title>
  </head>

  <body>
    <form action="{{ route('category.expenses.create') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Nome da Categoria" required>
      <input type="submit" name="submit" value="Cadastrar">
    </form>
  </body>

</html>
