@extends('template.dashboard')

@section('title')
  Doações
@endsection

@section('content')
{{date_default_timezone_set("America/Sao_Paulo")}}
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Lista de doações
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item text-muted active">
                Financeiro
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Doações
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                  <div class="p-2 bg-primary text-center">
                    <h1 class="font-light text-white">
                      {{count($allTransactions)}}
                    </h1>
                    <h6 class="text-white">
                      Total de doações
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                  <div class="p-2 bg-success text-center">
                      <?php
                      $transactionsPaids = array_filter($allTransactions, function ($item) {
                        return $item['status'] === 'paid';
                      })
                      ?>
                        <h1 class="font-light text-white">
                          {{count($transactionsPaids)}}
                        </h1>

                    <h6 class="text-white">
                      Aprovadas
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                  <div class="p-2 bg-cyan text-center">
                    <?php
                    $trasactionsPending = array_filter($allTransactions, function ($item) {
                      return $item['status'] === 'pending_review';
                    })
                    ?>
                    <h1 class="font-light text-white">
                      {{count($trasactionsPending)}}
                    </h1>
                    <h6 class="text-white">
                      Pendentes
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                  <div class="p-2 bg-danger text-center">
                    <?php
                       $transactionsRefused = array_filter($allTransactions, function ($item) {
                        return $item['status'] === 'refused';
                      })
                      ?>
                    <h1 class="font-light text-white">
                      {{count($transactionsRefused)}}
                    </h1>
                    <h6 class="text-white">
                      Recusadas
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th>Estado</th>
                    <th>ID</th>
                    <th>Valor</th>
                    <th>Nome</th>
                    <th>Modo</th>
                    <th>Data</th>
                    <th>Horário</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allTransactions as $transaction)
                    <tr>
                      <td>
                        <span class="badge badge-light-warning">
                          @if ($transaction['status'] === 'paid' )
                            {{'Aprovada'}}

                            @elseif ($transaction['status'] === 'refused')
                              {{'Recusada'}}

                            @else
                              {{'Pendente'}}

                          @endif
                        </span>
                      </td>
                      <td>
                        {{$transaction['id']}}
                      </td>
                      <td>
                        {{'R$ '.number_format($transaction['amount']/100, 2, ',', '.')}}
                      </td>
                      <td>{{$transaction['customer']['name']}}</td>
                      <td>{{$transaction['payment_method'] === 'credit_card' ? 'Cartão de Crédito' : ''}}</td>
                      <td>
                        {{ date('d/m/Y', strtotime($transaction['date_created']))}}
                      </td>
                      <td>
                        {{date('H:i:s', strtotime($transaction['date_created']))}}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Estado</th>
                    <th>ID</th>
                    <th>Valor</th>
                    <th>Nome</th>
                    <th>Modo</th>
                    <th>Data</th>
                    <th>Horário</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
