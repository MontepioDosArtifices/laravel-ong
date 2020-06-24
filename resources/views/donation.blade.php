@extends('template.site')

@section('content')
  <div class="donation-container">
    <form action="{{route('donation.send')}}" method="post">
      @csrf
      <div class="d-flex flex-row justify-content-around">

        <section class="data-personal">
          <h2>Dados Pessoais</h2>
          <div class="form-group mt-3">
            <label for="name">Nome completo</label>
            <input type="text" name="name" class="form-control mb-0" placeholder="Jefferson Eloy" required>
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" class="form-control mb-0" placeholder="000.000.000-00" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control mb-0" placeholder="exemplo@gmail.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" class="form-control mb-0" placeholder="(71) 9 9999-9999" required>
          </div>
        </section>

        <section class="data-cards">
          <h2>Dados do pagamento</h2>

          <div class="form-group mt-3">
            <label for="value">Valor da doação</label>
            <input type="text" name="value" class="form-control mb-0" placeholder="R$ 10,00" required>
          </div>

          <select class="custom-select" name="method_payment" id="inputGroupSelect01">
            <option selected>Selecionar forma de pagamento...</option>
            <option value="credit_card">Cartão de Crédito</option>
            <option value="boleto">Boleto</option>
          </select>

          <div class="form-group">
            <label for="name_card">Nome no cartão</label>
            <input type="text" name="name_card" class="form-control mb-0" placeholder="Jefferson S Eloy" required>
          </div>
          <div class="form-group">
            <label for="number_card">Número do cartão</label>
            <input type="text" name="number_card" class="form-control mb-0" placeholder="0000 0000 0000 0000" required>
          </div>
          <div class="row ml-0 mr-0">
            <div class="form-group mr-1">
              <label for="cvv">CVV</label>
              <input type="text" name="cvv" class="form-control mb-0" placeholder="782" required>
            </div>
            <div class="form-group ml-1">
              <label for="expiration_date">Vencimento</label>
              <input type="text" name="expiration_date" class="form-control mb-0" placeholder="12/2025" required>
            </div>
          </div>
        </section>
      </div>
      <div class="col d-flex justify-content-center">
      <button type="submit" class="btn btn-primary center mb-3">Confirmar doação</button>
    </div>
    </form>
  </div>



@endsection
