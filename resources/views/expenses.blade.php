<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Despesas</title>
  </head>

  <body>
    <form action="{{ route('expenses.create') }}" method="post">
      @csrf
      <select name="category_id" id="">
        @foreach($allCategories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
      <input type="text" name="value" id="" placeholder="Valor">
      <textarea name="description" id="" cols="30" rows="2"></textarea>
      <input type="date" name="payment_date" placeholder="Data da pagamento" required>
      <input type="submit" name="submit" value="Cadastrar">
    </form>
  </body>

</html>
