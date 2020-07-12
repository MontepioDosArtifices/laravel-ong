@extends('template.dashboard')

@section('title')
  Cadastrar Curso
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Cadastrar curso
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
    <form action="{{ route('course.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" name="title" class="form-control" placeholder="Titulo do Curso" required>
      <input type="text" name="limit" class="form-control" placeholder="Limite de pessoas" required>
      <textarea type="text" name="description" class="form-control" placeholder="Descrição do Curso" required></textarea>
      <div class="custom-file">
        <input type="file" name="image" accept="image/png, image/jpeg" id="customFileLang" class="custom-file-input">
        <label for="customFileLang" data-browse="Buscar" class="custom-file-label">Imagem da postagem</label>
      </div><br><br><br>
      <input type="submit" class="btn btn-primary form-control" value="Cadastrar">
    </form>
  </div>
</div>
@endsection
