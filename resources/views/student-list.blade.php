@extends('template.dashboard')

@section('title')
  Alunos
@endsection

@section('content')
{{date_default_timezone_set('America/Sao_Paulo')}}
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Lista de alunos do curso
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
        <div class="table-responsive" style="margin-top: 30px;">
          <table id="zero_config" class="table table-striped table-bordered no-wrap">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Matriculado</th>
                <th>Modificado</th>
                <th>Editar</th>
                <th>Apagar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allStudents as $student)
                <tr>
                  <td>
                      {{ $student->name }}
                  </td>
                  <td>
                    {{ $student->email }}
                  </td>
                  <td>
                    {{ $student->cpf }}
                  </td>
                  <td>
                    {{ $student->phone }}
                  </td>
                  <td>
                    {{ date('d/m/Y H:i', strtotime($student->created_at))}}
                  </td>
                  <td>
                    {{ date('d/m/Y H:i', strtotime($student->updated_at))}}
                  </td>
                  <td>
                    <a href="{{route('student.edit', ['student' => $student->id])}}">
                      <i class="ti-pencil"></i>
                    </a>
                  </td>
                  <td>
                    <form action="{{route("student.destroy", $student->id)}}" method="post">
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
