@extends('template.dashboard')

@section('title')
  Cadastrar funcionário
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Cadastrar funcionário
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                <a href="index.html" class="text-muted">
                  Administrativo
                </a>
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Cadastrar
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
    <form action="{{route('user.create')}}" method="post">
      <h1>Dados Pessoais</h1>
      @csrf
      <input type="text" name="name" class="form-control" placeholder="Nome completo" required>
      <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
      <input type="email" name="email" class="form-control" placeholder="E-mail" required>
      <input type="password" name="password" class="form-control" placeholder="Senha" required>
      <input type="password" name="password_confirmed" class="form-control" placeholder="Confirmar senha" required>
      <input type="text" name="phone" class="form-control" placeholder="Telefone" required>
      <input type="text" name="office" class="form-control" placeholder="Cargo"></br>
      <input type="submit" class="btn btn-primary form-control" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
