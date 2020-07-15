@extends('template.dashboard')

@section('title')
  Editar funcionário
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Editar funcionário
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                <a href="#" class="text-muted">
                  Administrativo
                </a>
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
    <form action="{{route('user.update', ['user' => $user->id])}}" method="post">
      <h1>Dados Pessoais</h1>
      @csrf
      @method('PUT')
      <input type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Nome completo">
      <input type="cpf" value="{{$user->cpf}}" name="cpf" class="form-control" placeholder="CPF" minlength="15" maxlength="15">
      <input type="email" value="{{$user->email}}" name="email" class="form-control" placeholder="E-mail">
      <input type="password" name="password" class="form-control" placeholder="Senha">
      <input type="password" name="password_confirmed" class="form-control" placeholder="Confirmar senha">
      <input type="phone" value="{{$user->phone}}" name="phone" class="form-control" minlength="16" maxlength="16" placeholder="Telefone">
      <input type="text" value="{{$user->office}}" name="office" class="form-control" placeholder="Cargo"></br>
      <input type="submit" class="btn btn-primary form-control" value="Editar">
    </form>
  </div>
</div>
@endsection
