@extends('template.site')

@section('content')
<div id="blog" class="tr-blog">
  <div class="section-content">
    <div class="container">
      <div class="section-header section-header-2">
        <h1>Ultimas notícias</h1>
        <div class="sub-title title-before">
          <p>Oferecemos cursos, desenvolvidos pelos nossos profissionais da área de educação, que são voltados para administração,
            finanças, desenovlvimento pessoal, entre diversos outros conteúdos!</p>
        </div>
      </div>
      <div class="row">
        @foreach ($courses as $course)
        @if ($course->full == 0)
          <div class="col-md-6 col-lg-4">
            <div class="tr-post">
              <div class="entry-header">
                <div class="entry-thumbnail">
                  <a href="{{ route('site.post.show', $course->slug) }}">
                    <img src="{{ $course->image }}" alt="Imagem" class="img-fluid">
                  </a>
                </div>
                <h2 class="entry-title"><a href="{{ route('site.course.show', $course->slug) }}">{{ $course->title }}</a></h2>
                <div class="entry-footer clearfix">
                  <ul class="tr-list">
                    <li class="float-left">
                      <span class="tr-author">
                        <img src="images/others/author1.png" class="img-fluid" alt="Image">
                      </span>
                      <a href="#"><span>Por</span> Admin</a>
                    </li>
                    <li class="float-right tr-date">{{ date('d/m/Y', strtotime($course->created_at)) }}</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        @endif
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
