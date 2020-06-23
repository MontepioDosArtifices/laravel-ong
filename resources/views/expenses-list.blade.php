@extends('template.dashboard')

@section('title')
  Categorias
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Lista de Despesas
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                <a href="#" class="text-muted">
                  Financeiro
                </a>
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Despesas
              </li>
            </ol>
          </nav>
        </div>
      </div>
        <div class="table-responsive" style="margin-top: 30px;">
          <table id="zero_config" class="table table-striped table-bordered no-wrap">
            <thead>
              <tr>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Data do pagamento</th>
                <th>Criação</th>
                <th>Modificação</th>
                <th>Editar</th>
                <th>Apagar</th>
              </tr>
            </thead>
            <tbody>
                @foreach($allExpenses as $expense)
                  <tr>
                    <td>
                      {{ $expense->name }}
                    </td>
                    <td>
                      {{ $expense->value }}
                    </td>
                    <td>
                      {{ $expense->description }}
                    </td>
                    <td>
                      {{ $expense->payment_date }}
                    </td>
                    <td>
                      {{ $expense->created_at }}
                    </td>
                    <td>
                      {{ $expense->updated_at }}
                    </td>
                    <td>
                      <a href="{{url("dashboard/despesas/editar/$expense->id")}}">
                        <i class="ti-pencil"></i>
                      </a>
                    </td>
                    <td>
                      <a href="{{url("dashboard/despesas/apagar/$expense->id")}}">
                        <i class="ti-trash"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
