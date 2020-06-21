@extends('template.dashboard')

@section('title')
  Buscar funcionário
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Buscar funcionário
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                <a href="{{url('dashboard/')}}" class="text-muted">
                  Administrativo
                </a>
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Busca
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-5 align-self-center">
        <div class="customize-input float-right">
          <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
            <option selected>
              jul 01
            </option>
            <option value="1">
              Jun 01
            </option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <form method="post" action="{{url('/dashboard/buscar/')}}">
      <div class="customize-input">
        <input class="form-control custom-shadow custom-radius border-0 bg-white"style="width:50%;"; type="search" name="busca" placeholder="Busca" aria-label="Search">
      </div>
    </form>
  </div>
</div>
@endsection
