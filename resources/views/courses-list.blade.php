@extends('template.dashboard')

@section('title')
  Cursos
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Lista de Cursos
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
        <div class="table-responsive" style="margin-top: 30px;">
          <table id="zero_config" class="table table-striped table-bordered no-wrap">
            <thead>
              <tr>
                <th>Título</th>
                <th>Limite de pessoas</th>
                <th>Descrição</th>
                <th>Criação</th>
                <th>Modificado</th>
                <th>Editar</th>
                <th>Apagar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allCourses as $course)
                <tr>
                  <td>
                    {{ $course->title }}
                  </td>
                  <td>
                    {{ $course->limit }}
                  </td>
                  <td>
                    {{ $course->description }}
                  </td>
                  <td>
                    {{ date('d/m/Y H:i', strtotime($course->created_at))}}
                  </td>
                  <td>
                    {{ date('d/m/Y H:i', strtotime($course->updated_at))}}
                  </td>
                  <td>
                    <a href="{{route('course.edit', ['course' => $course->id])}}">
                      <i class="ti-pencil"></i>
                    </a>
                  </td>
                  <td>
                    <form action="{{route("course.destroy", $course->id)}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" style="border: 0; background: none; color: red;">
                        <i class="ti-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
