@extends('template.dashboard')

@section('title')
  Doações
@endsection

@section('content')
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
              <li class="breadcrumb-item">
                <a href="{{url('/dashboard/financeiro')}}" class="text-muted">
                  Financeiro
                </a>
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Doações
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-5 align-self-center">
        <div class="customize-input float-right">
          <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
            <option selected>
              Jul 01
            </option>
            <option value="1">
              Jun 01
            </option>
          </select>
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
                      1.600
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
                    <h1 class="font-light text-white">
                      1.000
                    </h1>
                    <h6 class="text-white">
                      Confirmadas
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                  <div class="p-2 bg-cyan text-center">
                    <h1 class="font-light text-white">
                      500
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
                    <h1 class="font-light text-white">
                      100
                    </h1>
                    <h6 class="text-white">
                      Retornaram
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
                    <th>Causa</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Modo</th>
                    <th>Data</th>
                    <th>Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <span class="badge badge-light-warning">
                        Confirmado
                      </span>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-weight-medium link">
                        Salvador sem fome
                      </a>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-bold link">
                        276377
                      </a>
                    </td>
                    <td>Guilherme Caires</td>
                    <td>Cartão</td>
                    <td>2018/05/01</td>
                    <td>200</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="badge badge-light-danger">
                        Confirmado
                      </span>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-weight-medium link">
                        Salvador sem sede
                      </a>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-bold link">
                        1234251
                      </a>
                    </td>
                    <td>Jefferson Eloy</td>
                    <td>Cartão</td>
                    <td>2018/05/11</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="badge badge-light-success">
                        Pendente
                      </span>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-weight-medium link">
                        Salvador sem fome
                      </a>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-bold link">
                        1020345
                      </a>
                    </td>
                    <td>Júlio Cézar</td>
                    <td>Boleto</td>
                    <td>2018/04/01</td>
                    <td>35</td>
                  </tr>
                  <tr>
                    <td>
                      <span class="badge badge-light-warning">
                        Retornou
                      </span>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-weight-medium link">
                        Salvador sem frio
                      </a>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="font-bold link">
                        7810203
                      </a>
                    </td>
                    <td>Danilo Vieira</td>
                    <td>Cartão</td>
                    <td>2018/01/01</td>
                    <td>170</td>
                  </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Estado</th>
                        <th>Causa</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Modo</th>
                        <th>Data</th>
                        <th>Valor</th>
                    </tr>
                </tfoot>
              </table>
              <ul class="pagination float-right">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    Anterior
                  </a>
                </li>
                <li cass="page-item active">
                  <a class="page-link" href="#">
                    1
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2 <span class="sr-only">
                    (current)
                  </span></a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    3
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    Próximo
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
