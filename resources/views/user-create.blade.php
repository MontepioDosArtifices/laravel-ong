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
              <li class="breadcrumb-item text-muted active">
                Administrativo
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Funcionário
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <form action="{{route('user.store')}}" method="post">
      <h1>Dados Pessoais</h1>
      @csrf
      <input type="text" name="name" class="form-control" placeholder="Nome completo" required>
      <input type="cpf" name="cpf" class="form-control" placeholder="CPF" maxlength="15" required>
      <input type="email" name="email" class="form-control" placeholder="E-mail" required>
      <input type="password" name="password" class="form-control" placeholder="Senha" required>
      <input type="password" name="password_confirmed" class="form-control" placeholder="Confirmar senha" required>
      <input type="phone" name="phone" class="form-control" placeholder="Telefone" maxlength="16" required>
      <input type="text" name="office" class="form-control" placeholder="Cargo"></br>
      <input type="submit" class="btn btn-primary form-control" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
