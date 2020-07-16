@extends('template.site')

@section('content')
  <div class="tr-subscribe">
    <div class="section-content">
      <div class="container text-center">
        <div class="subscribe-info">
          <h1>{{ $course->title }}</h1>
          <span>{{ date('d/m/Y', strtotime($course->created_at)) }}</span>
          <img src="{{ url($course->image) }}" style="margin: 30px 0;" alt="Imagem da postagem">
          <p style="text-align: justify;">{{ $course->description }}</p>
          {{-- nl2br($post->body) --}}
        </div>
      </div>
    </div>
  </div>
  <div class="tr-subscribe">
    <div class="section-content tr-parallax bg-image" style="background-image: none; position: relative; z-index: 0;">
      <div class="container text-center">
        <div class="subscribe-info">
          <h1>Faça agora seu cadastro no curso de {{ $course->title }}</h1>

          <form action="{{ route('student.store') }}" class="tr-form" method="post">
            @csrf
            <input type="hidden" name="course" value="{{$course->id}}">
            <input type="text" name="name" class="form-control" placeholder="Nome" autofocus required>
            <input type="text" name="email" class="form-control" placeholder="Email" required>
            <input type="cpf" name="cpf" class="form-control" placeholder="CPF" maxlength="15" required>
            <input type="phone" name="phone" class="form-control" placeholder="Ex: 75 9 8788-8888" maxlength="16"required></br>
            <input type="submit" class="btn btn-primary" value="Inscreva-se agora">
          </form>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div>
@endsection
