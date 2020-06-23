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
          Lista de Categorias
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
                <th>Nome</th>
                <th>Criação</th>
                <th>Modificação</th>
                <th>Editar</th>
                <th>Apagar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allCategories as $category)
                <tr>
                  <td>
                    {{ $category->name }}
                  </td>
                  <td>
                    {{ $category->created_at}}
                  </td>
                  <td>
                    {{ $category->updated_at}}
                  </td>
                  <td>
                    <a href="{{url("dashboard/despesas/categoria/editar/$category->id")}}">
                      <i class="ti-pencil"></i>
                    </a>
                  </td>
                  <td>
                    <a href="{{url("dashboard/despesas/categorias/apagar/$category->id")}}">
                      <i class="ti-trash"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
