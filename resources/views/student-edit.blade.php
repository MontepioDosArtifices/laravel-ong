@extends('template.dashboard')

@section('title')
  Editar dados do aluno
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Editar dados do estudante
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                <a href="#" class="text-muted">
                  Social
                </a>
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Alunos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <form action="{{route('student.update', ['student' => $student->id])}}" method="post">
      <h1>Categorias</h1>
      @csrf
      @method('PUT')
        <input type="text" value="{{$student->name}}" name="name" class="form-control" placeholder="Nome" autofocus required>
        <input type="text" value="{{$student->email}}" name="email" class="form-control" placeholder="Email" required>
        <input type="text" value="{{$student->cpf}}" name="cpf" class="form-control" placeholder="CPF"  maxlength="11" required disabled>
        <input type="text" value="{{$student->phone}}" name="phone" class="form-control" placeholder="Ex: 75 9 8788-8888" maxlength="13"required></br>
      <input type="submit" class="btn btn-primary form-control" value="Editar">
    </form>
  </div>
</div>
@endsection
