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
                <a href="{{url('/dashboard')}}">
                  Início
                </a>
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
                <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                  <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">
                    +18%
                  </span>
              </div>
              <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">
                Novos doadores
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
                  18.789
                </h2>
                <span class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">
                  +10%
                </span>
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
                56.098
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
      <div class="card">
        <div class="card-body">
          <div class="d-flex d-lg-flex d-md-block align-items-center">
            <div>
              <h2 class="text-dark mb-1 font-weight-medium">
                22
              </h2>
              <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">
                Projetos
              </h6>
            </div>
            <div class="ml-auto mt-md-3 mt-lg-0">
              <span class="opacity-7 text-muted">
                <i data-feather="file"></i>
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

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-center mb-4">
              <h4 class="card-title">
                Top Coladoradores
              </h4>
              <div class="ml-auto">
                <div class="dropdown sub-dropdown">
                  <button
                    class="btn btn-link text-muted dropdown-toggle"
                    type="button"
                    id="dd1"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i data-feather="more-vertical"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                      <a class="dropdown-item" href="#">Inserir</a>
                      <a class="dropdown-item" href="#">Atualizar</a>
                      <a class="dropdown-item" href="#">Deletar</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table no-wrap v-middle mb-0">
                <thead>
                  <tr class="border-0">
                    <th class="border-0 font-14 font-weight-medium text-muted">
                      Líder de Projeto
                    </th>
                    <th class="border-0 font-14 font-weight-medium text-muted px-2">
                      Projeto
                    </th>
                    <th class="border-0 font-14 font-weight-medium text-muted">
                      Time
                    </th>
                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                      Estado
                    </th>
                    <th class="border-0 font-14 font-weight-medium text-muted text-center">
                      Semanas
                    </th>
                    <th class="border-0 font-14 font-weight-medium text-muted">
                      Arrecadado
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-top-0 px-2 py-4">
                      <div class="d-flex no-block align-items-center">
                        <div class="mr-3">
                          <img
                            src="{{url('/assets/images/users/widget-table-pic1.jpg')}}"
                            alt="user"
                            class="rounded-circle"
                            width="45"
                            height="45"
                          />
                        </div>
                        <div>
                          <h5 class="text-dark mb-0 font-16 font-weight-medium">
                            Jefferson Eloy
                          </h5>
                          <span class="text-muted font-14">
                            jeffeloy@gmail.com
                          </span>
                        </div>
                      </div>
                    </td>
                    <td class="border-top-0 text-muted px-2 py-4 font-14">
                      Salvador sem fome
                    </td>
                    <td class="border-top-0 px-2 py-4">
                      <div class="popover-icon">
                        <a class="btn btn-primary rounded-circle btn-circle font-12" href="javascript:void(0)">
                          DS
                        </a>
                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item" href="javascript:void(0)">
                          SS
                        </a>
                        <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item" href="javascript:void(0)">
                          RP
                        </a>
                        <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">
                          +
                        </a>
                      </div>
                    </td>
                    <td class="border-top-0 text-center px-2 py-4">
                      <i class="fa fa-circle text-primary font-12" data-toggle="tooltip" data-placement="top" title="Em andamento"></i>
                    </td>
                    <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                      35
                    </td>
                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                      R$96.000
                    </td>
                  </tr>
                  <tr>
                    <td class="px-2 py-4">
                      <div class="d-flex no-block align-items-center">
                        <div class="mr-3">
                          <img
                            src="{{url('/assets/images/users/widget-table-pic2.jpg')}}"
                            alt="user" class="rounded-circle" width="45"
                            height="45"
                          />
                        </div>
                        <div>
                          <h5 class="text-dark mb-0 font-16 font-weight-medium">
                            Guilherme Caires
                          </h5>
                          <span class="text-muted font-14">
                            gcaires@gmail.com
                          </span>
                        </div>
                      </div>
                    </td>
                    <td class="text-muted px-2 py-4 font-14">Salvador sem sede</td>
                    <td class="px-2 py-4">
                      <div class="popover-icon">
                        <a class="btn btn-primary rounded-circle btn-circle font-12"href="javascript:void(0)">
                            DS
                        </a>
                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item" href="javascript:void(0)">
                          SS
                        </a>
                        <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">
                          +
                        </a>
                      </div>
                    </td>
                    <td class="text-center px-2 py-4">
                      <i class="fa fa-circle text-success font-12" data-toggle="tooltip"data-placement="top" title="Concluído"></i>
                    </td>
                    <td class="text-center text-muted font-weight-medium px-2 py-4">
                      32
                    </td>
                    <td class="font-weight-medium text-dark px-2 py-4">
                      R$85.000
                    </td>
                  </tr>
                  <tr>
                    <td class="px-2 py-4">
                      <div class="d-flex no-block align-items-center">
                        <div class="mr-3">
                          <img
                            src="{{url('/assets/images/users/widget-table-pic2.jpg')}}"
                            alt="user" class="rounded-circle" width="45"
                            height="45"
                          />
                        </div>
                        <div>
                          <h5 class="text-dark mb-0 font-16 font-weight-medium">
                            Guilherme Caires
                          </h5>
                          <span class="text-muted font-14">
                            gcaires@gmail.com
                          </span>
                        </div>
                      </div>
                    </td>
                    <td class="text-muted px-2 py-4 font-14">Salvador sem sede</td>
                    <td class="px-2 py-4">
                      <div class="popover-icon">
                        <a class="btn btn-primary rounded-circle btn-circle font-12"href="javascript:void(0)">
                            DS
                        </a>
                        <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item" href="javascript:void(0)">
                          SS
                        </a>
                        <a class="btn btn-success text-white rounded-circle btn-circle font-20" href="javascript:void(0)">
                          +
                        </a>
                      </div>
                    </td>
                    <td class="text-center px-2 py-4">
                      <i class="fa fa-circle text-success font-12" data-toggle="tooltip"data-placement="top" title="Concluído"></i>
                    </td>
                    <td class="text-center text-muted font-weight-medium px-2 py-4">
                      32
                    </td>
                    <td class="font-weight-medium text-dark px-2 py-4">
                      R$85.000
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
