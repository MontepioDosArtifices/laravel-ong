@extends('template.dashboard')

@section('title')
  Listar postagens
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Listar postagens
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item">
                <a href="{{url('dashboard/')}}" class="text-muted">
                  Social
                </a>
              </li>
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Postagem
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-5 align-self-center">
        <div class="customize-input float-right">
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
    <div class="table-responsive" style="margin-top: 30px">
      <table id="zero_config" class="table table-striped table-bordered no-wrap">
        <thead>
          <tr>
            <th>Imagem</th>
            <th>Título</th>
            <th>Slug</th>
            <th>Corpo</th>
            <th>Postado</th>
            <th>Editado</th>
            <th>Editar</th>
            <th>Apagar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>
                <img src="{{ url("$post->image") }}" width="60px" height="60px" alt="Imagem" />
              </td>
              <td>
                @if(strlen($post->title) > 25)
                  {{ substr($post->title, 0, 25) . '...' }}
                @else
                  {{ $post->title }}
                @endif
              </td>
              <td>
                @if(strlen($post->slug) > 15)
                  {{ substr($post->slug, 0, 15) . '...' }}
                @else
                  {{ $post->slug }}
                @endif
              </td>
              <td>
                @if(strlen($post->body) > 15)
                  {{ substr($post->body, 0, 15) . '...' }}
                @else
                  {{ $post->body }}
                @endif
              </td>
              <td>
                {{ date('d/m/Y H:i', strtotime($post->created_at)) }}
              </td>
              <td>
                {{ date('d/m/Y H:i', strtotime($post->created_at)) }}
              </td>
              <td>
                <a href="{{route('post.edit', ['post' => $post->id])}}">
                  <i class="ti-pencil"></i>
                </a>
              </td>
              <td>
                <form action="{{route("post.destroy", $post->id)}}" method="post">
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
      </table>
    </div>
  </div>
</div>
@endsection
