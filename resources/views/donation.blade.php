@extends('template.site')

@section('content')
<div class="container col-md-7 col-sm-10" style="margin-top: 150px;">
  <form action="{{ route('donation.send') }}" method="post">
    @csrf
    <section>
      <h2>Dados Pessoais</h2>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="name">Nome completo</label>
            <input type="text" name="name" id="name" maxlength="50" class="form-control" placeholder="Ex: João Silva Pereira" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" minlength="11" maxlength="11" class="form-control" placeholder="Ex: 999.999.999.99" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" maxlength="100" class="form-control" placeholder="Ex: joao.silva@hotmail.com" required>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" maxlength="11" maxlength="11" class="form-control" placeholder="Ex: (99) 9 9999-9999" required>
          </div>
        </div>
      </div>
    </section>
    <section>
      <h2>Dados de pagamento</h2>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="value">Valor</label>
            <input type="text" name="value" id="value" class="form-control" placeholder="Ex: R$20,00" required>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="payment-method">Forma de pagamento</label>
            <select class="custom-select" name="payment_method" id="payment-method" required>
              <option selected value="credit_card">Cartão de crédito</option>
              <option value="boleto">Boleto bancário</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="card_holder_name">Nome escrito no cartão</label>
            <input type="text" name="card_holder_name" id="card_holder_name" maxlength="25" class="form-control" placeholder="Ex: João S Pereira">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="card_number">Número do cartão</label>
            <input type="text" name="card_number" id="card_number" class="form-control" minlength="19" maxlength="19" maxlength="19" placeholder="Ex: 9999 9999 9999 9999">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="card_cvv">CVV</label>
            <input type="text" name="card_cvv" id="card_cvv" minlength="3" maxlength="3" class="form-control" placeholder="Ex: 999" required>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="card_expiration_date">Data de validade</label>
            <input type="text" name="card_expiration_date" id="card_expiration_date" class="form-control" maxlength="6" maxlength="6" placeholder="Ex: 032021" required>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="col d-flex justify-content-center">
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Doar</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
