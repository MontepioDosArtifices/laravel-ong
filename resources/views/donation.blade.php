@extends('template.site')

@section('content')
  <div class="mt-lg-40">

    <form action="{{route('donation.send')}}" method="post">
      @csrf
      <div class="d-flex flex-row justify-content-around">

        <section class="data-personal">
          <h2>Dados Pessoais</h2>
          <div class="form-group">
            <label for="name">Nome completo</label>
            <input type="text" name="name" class="form-control" placeholder="Jefferson Eloy" required>
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="exemplo@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" class="form-control" placeholder="(71) 9 9999-9999" required>
          </div>
        </section>

        <section class="data-cards">
          <h2>Dados do pagamento</h2>

          <div class="form-group">
            <label for="name">Valor da doação</label>
            <input type="text" name="value" class="form-control" placeholder="R$ 10,00" required>
          </div>

          <select class="custom-select" id="inputGroupSelect01">
            <option selected>Selecionar forma de pagamento...</option>
            <option value="credit_card">Cartão de Crédito</option>
            <option value="boleto">Boleto</option>
          </select>

          <div class="form-group">
            <label for="name-cart">Nome no cartão</label>
            <input type="text" name="name-cart" class="form-control" placeholder="Jefferson S Eloy" required>
          </div>
          <div class="form-group">
            <label for="number-cart">Número do cartão</label>
            <input type="text" name="number-cart" class="form-control" placeholder="0000 0000 0000 0000" required>
          </div>
          <div class="row">
            <div class="form-group">
              <label for="cvv">CVV</label>
              <input type="text" name="cvv" class="form-control" placeholder="782" required>
            </div>
            <div class="form-group">
              <label for="expiration-date">Vencimento</label>
              <input type="text" name="expiration-date" class="form-control" placeholder="12/2025" required>
            </div>
          </div>
        </section>
      </div>
      <div class="col d-flex justify-content-center">
      <button type="submit" class="btn btn-primary center">Confirmar doação</button>
    </div>
    </form>
  </div>



@endsection
