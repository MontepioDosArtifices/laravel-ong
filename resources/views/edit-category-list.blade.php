@extends('template.dashboard')

@section('title')
  Editar categoria
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Editar categoria
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
    </div>
  </div>
  <div class="container-fluid">
    <form action="{{route('category.edit', ['category' => $category->id])}}" method="post">
      <h1>Categorias</h1>
      @csrf
      @method('PUT')
      <input type="text" value="{{$category->name}}" name="name" class="form-control" placeholder="Nome da categoria"></br>
      <input type="submit" class="btn btn-primary form-control" value="Editar">
    </form>
  </div>
</div>
@endsection
