@extends('template.dashboard')

@section('title')
  Início
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Olá, {{session('name')}}!
        </h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                Início
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <div class="card-group">
      <div class="card border-right">
        <div class="card-body">
          <div class="d-flex d-lg-flex d-md-block align-items-center">
            <div>
              <div class="d-inline-flex align-items-center">
              <h2 class="text-dark mb-1 font-weight-medium">{{count($allCustomers)}}</h2>
              </div>
              <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">
                Total de doadores
              </h6>
            </div>
            <div class="ml-auto mt-md-3 mt-lg-0">
              <span class="opacity-7 text-muted">
                <i data-feather="user-plus"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="card border-right">
        <div class="card-body">
          <div class="d-flex d-lg-flex d-md-block align-items-center">
            <div>
              <div class="d-inline-flex align-items-center">
                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">
                  <sup class="set-doller">
                    R$
                  </sup>
                  <?php
                    $trasactionsCurrentMount = array_filter($allTransactions, function ($item) {
                      $currentMount = date('m');
                      return date('m', strtotime($item['date_created'])) === $currentMount;
                    });
                    $value = 0;
                    for ($i=0; $i <=count($trasactionsCurrentMount)-1 ; $i++) {
                      $value += $trasactionsCurrentMount[$i]['amount'];
                    }
                  ?>
                  {{ number_format($value/100, 2, ',', '.') }}
                </h2>
              </div>
              <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">
                Doações do mês
              </h6>
            </div>
            <div class="ml-auto mt-md-3 mt-lg-0">
              <span class="opacity-7 text-muted">
                <i data-feather="dollar-sign"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="card border-right">
        <div class="card-body">
          <div class="d-flex d-lg-flex d-md-block align-items-center">
            <div>
              <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">
                <sup class="set-doller">
                   R$
                </sup>
                <?php
                  $value = 0;
                  for ($i=0; $i <=count($allTransactions)-1 ; $i++) {
                    $value += $allTransactions[$i]['amount'];
                  }
                ?>
                {{ number_format($value/100, 2, ',', '.') }}
              </h2>
              <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">
                Total doado
              </h6>
            </div>
            <div class="ml-auto mt-md-3 mt-lg-0">
              <span class="opacity-7 text-muted">
                <i data-feather="dollar-sign"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Total doado</h4>
            <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
            <ul class="list-style-none mb-0">
              <li>
                <i class="fas fa-circle text-primary font-10 mr-2"></i>
                <span class="text-muted">
                  Causas sociais
                </span>
                <span class="text-dark float-right font-weight-medium">
                  R$2.146
                </span>
              </li>
              <li class="mt-3">
                <i class="fas fa-circle text-danger font-10 mr-2"></i>
                <span class="text-muted">
                  Custos operacionais
                </span>
                <span class="text-dark float-right font-weight-medium">
                  R$2.108
                </span>
              </li>
              <li class="mt-3">
                <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                <span class="text-muted">
                  Auxílio voluntário
                </span>
                <span class="text-dark float-right font-weight-medium">
                  R$1.204
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              Doações
            </h4>
            <div class="net-income mt-4 position-relative" style="height:294px;"></div>
            <ul class="list-inline text-center mt-5 mb-2">
              <li class="list-inline-item text-muted font-italic">
                Doações por mês
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    </div>
    </div>
    </div>
    </div>
  </div>
</div>
@endsection
