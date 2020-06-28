@extends('template.dashboard')

@section('title')
  Editar curso
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Editar curso
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
                Cursos
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <form action="{{route('course.update', ['course' => $course->id])}}" method="post">
      <h1>Cursos</h1>
      @csrf
      @method('PUT')
      <input type="text" value="{{$course->title}}" name="title" class="form-control" placeholder="Nome da categoria">
      <input type="text" value="{{$course->limit}}" name="limit" class="form-control" placeholder="Limite de Pessoas">
      <input type="text" value="{{$course->description}}" name="description" class="form-control" placeholder="Descrição"></br>
      <input type="submit" class="btn btn-primary form-control" value="Editar">
    </form>
  </div>
</div>
@endsection
