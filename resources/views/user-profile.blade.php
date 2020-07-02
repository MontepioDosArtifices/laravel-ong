@extends('template.dashboard')

@section('title')
  Perfil
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Editar perfil
        </h4>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
      <h1>Dados Pessoais</h1>
      @csrf
      @method('PUT')
      <input type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Nome completo">
      <input type="text" value="{{$user->cpf}}" maxlength="11" name="cpf" class="form-control" placeholder="CPF" maxlength="11">
      <input type="email" value="{{$user->email}}" name="email" class="form-control" placeholder="E-mail">
      <input type="password" name="password" class="form-control" placeholder="Senha">
      <input type="password" name="password_confirmed" class="form-control" placeholder="Confirmar senha">
      <input type="text" value="{{$user->phone}}" maxlength="11" name="phone" class="form-control" placeholder="Telefone">
      <input type="text" value="{{$user->office}}" name="office" class="form-control" placeholder="Cargo"></br>
      <input type="submit" class="btn btn-primary form-control" value="Editar">
    </form>
  </div>
</div>
@endsection
