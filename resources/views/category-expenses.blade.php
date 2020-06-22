@extends('template.dashboard')

@section('title')
  Cadastrar categoria
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Cadastrar categoria
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                <a href="index.html" class="text-muted">
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
      <div class="col-5 align-self-center">
        <div class="customize-input float-right">
          <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
            <option selected>Jul 01</option>
            <option value="1">Jun 01</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <form action="{{ route('category.expenses.create') }}" method="post">
      <h1>Despesas</h1>
      @csrf
      <input type="text" name="name" class="form-control" placeholder="Nome da Categoria" required></br>
      <input type="submit" class="btn btn-primary form-control" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
