@extends('template.site')

@section('content')
  <div class="tr-subscribe">
    <div class="section-content">
      <div class="container text-center">
        <div class="subscribe-info">
          <h1>{{ $post->title }}</h1>
          <span>{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
          <img src="{{ url($post->image) }}" style="margin: 30px 0;" alt="Imagem da postagem">
          <p style="text-align: justify;">{{ $post->body }}</p>
          {{-- nl2br($post->body) --}}
        </div>
      </div>
    </div>
  </div>
@endsection
