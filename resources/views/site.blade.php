@extends('template.site')

@section('content')
  <div id="home" class="tr-banner">
    <div class="banner-content section-before bg-image" style="background-image: url(images/bg/banner-bg2.jpg);">
      <div class="container">
        <div class="banner-info">
          <h1>Sua contribuição ajuda milhares de vidas</h1>
          <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar. Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
          <a href="{{ route('donation.form') }}" class="btn btn-primary">Doar agora</a>
        </div><!-- /.banner-info -->
        <div class="tr-featured text-center">
          <div class="row">
            <div class="col-md-4">
              <div class="featured">
                <div class="featured-icon">
                  <img src="images/others/featured1.png" alt="Image" class="img-fluid">
                </div>
                <h2>Atuação</h2>
                <h3>Atuamos em Salvador - BA</h3>
              </div><!-- /.featured -->
            </div>
            <div class="col-md-4">
              <div class="featured">
                <div class="featured-icon">
                  <img src="images/others/featured2.png" alt="Image" class="img-fluid">
                </div>
                <h2>Compromisso</h2>
                <h3>As doações são inteiramente para nossas causas socias</h3>
              </div><!-- /.featured -->
            </div>
            <div class="col-md-4">
              <div class="featured">
                <div class="featured-icon">
                    <img src="images/others/featured3.png" alt="Image" class="img-fluid">
                </div>
                <h2>Nossa ajuda</h2>
                <h3>Nós ajudamos mais de 11.000 vidas desde 1980</h3>
              </div><!-- /.featured -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.tr-featured -->
      </div><!-- /.container -->
    </div><!-- /.banner-content -->
  </div><!-- /.tr-banner -->

  <div id="service" class="tr-service-section">
    <div class="section-content">
      <div class="container">
        <div class="section-header header-style-1">
          <div class="row">
            <div class="col-lg-4 d-flex flex-column justify-content-center">
              <h1 style="font-size: 29px">Associação Beneficente MontePio dos Artífices</h1>
            </div>
            <div class="col-lg-8">
              <div class="sub-title title-before">
                <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
              </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.section-header -->
        <div class="row text-center">
          <div class="col-md-4">
            <div class="tr-service">
              <div class="service-icon">
                <img src="images/others/service1.png" alt="Image" class="img-fluid">
              </div>
              <h2>Seja voluntário</h2>
              <p>Ser voluntário é mais do que se imagina, é se dedicar a ajudar sem esperar nada em troca.</p>
              <a href="#">Ler mais</a>
            </div><!-- /.tr-service -->
          </div>
          <div class="col-md-4">
            <div class="tr-service">
              <div class="service-icon">
                <img src="images/others/service2.png" alt="Image" class="img-fluid">
              </div>
              <h2>Doações</h2>
              <p>A verdadeira caridade só ocorre quando não há a noção de dar, de doador ou de doação.</p>
              <a href="#">Ler mais</a>
            </div><!-- /.tr-service -->
          </div>
          <div class="col-md-4">
            <div class="tr-service">
              <div class="service-icon">
                <img src="images/others/service3.png" alt="Image" class="img-fluid">
              </div>
              <h2>Arrecadados</h2>
              <p>Saiba como sua doação é destinada e como ela impacta na vida de milhares de pessoas.</p>
              <a href="#">Ler mais</a>
            </div><!-- /.tr-service -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.service-content -->
  </div><!-- /.tr-service -->

  <div id="about" class="tr-about-section">
    <div class="section-content tr-bg-white">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Quem somos</h1>
          <div class="sub-title title-before">
            <p>A Associação Beneficente MontePio dos Artífices, é uma ONG sem fins lucrativos, buscando ajudar vidas necessitadas.</p>
          </div>
        </div><!-- /.section-header -->
        <div class="row">
          <div class="col-lg-7">
            <div class="about-thumb">
              <img src="images/others/about.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5">
            <div class="tr-about">
              <h2>Nossa história</h2>
              <p>Surgindo em meados dos anos 70, a instituição possui uma história com mais de 50 anos. Sempre fazendo a diferença em todas as campanhas e multirões.</p>
            </div>
            <div class="tr-about">
              <h2>Missão</h2>
              <p>Muito mais que dar a mão em momentos difíceis, nossa missão é poder proporcionar uma melhora de vida, para que nossa ajuda não seja mais necessária à aqueles que acolhemos, e que assim, este possa retribuir ajudando mais pessoas.</p>
            </div>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <div class="tr-about">
                  <h2>Como nós ajudamos ?</h2>
                  <p>Muito mais que dar a mão em momentos difíceis, nossa missão é poder proporcionar uma melhora de vida, para que nossa ajuda não seja mais necessária à aqueles que acolhemos, e que assim, este possa retribuir ajudando mais pessoas.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="tr-about">
                  <h2>Por que escolhemos ajudar?</h2>
                  <p>Muito mais que dar a mão em momentos difíceis, nossa missão é poder proporcionar uma melhora de vida, para que nossa ajuda não seja mais necessária à aqueles que acolhemos, e que assim, este possa retribuir ajudando mais pessoas.</p>
                </div>
              </div>
            </div><!-- /.row -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-about-section -->

  <div class="tr-faq-section">
    <div class="section-content tr-bg-white">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Perguntas</h1>
          <div class="sub-title title-before">
            <p>Saiba um pouco mais sobre nós, através das perguntas mais comuns que recebemos.</p>
          </div>
        </div><!-- /.section-header -->

        <div class="tr-faq-content">
          <div class="row">
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Onde estão localizados?</h2>
                <p>Nossa base de operação é um prédio histórico, com mais 500 anos de existência, e está localizado no Pelourinho em Salvador - BA.</p>
              </div><!-- /.tr-faq -->
            </div>
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Eu posso ser um voluntário?</h2>
                <p>Claro! Incentivamos a todos a ter essa experiência, e trabalhamos muito para conectar mais pessoas à nossa rede do bem!</p>
              </div><!-- /.tr-faq -->
            </div>
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Como faço para ser um voluntário?</h2>
                <p>Assim como ficamos felizes em ter-los conosco, precisamos avaliar se as condições para essa parceria está de acordo, por isso iremos avaliar todas as questões atraves do contato por e-mail :)</p>
                <p>Clique <a href="#contact">aqui</a> para entar em contato!</p>
              </div><!-- /.tr-faq -->
            </div>
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Como posso doar?</h2>
                <p>Para realizar uma doação, basta preencher os dados do nosso formulário de doação.</p>
                <p>Clique <a href="{{route('donation.form')}}">aqui</a> para ser direcionado :)</p>
              </div><!-- /.tr-faq -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.tr-faq-content -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-faq-section -->

  <div id="gallery" class="tr-photo-gallery">
    <div class="gallery-content">
      <ul class="global-list">
        <li>
          <div class="tr-photo">
            <img src="images/gallery/1.jpg" alt="Image" class="img-fluid">
            <div class="photo-overlay">
              <div class="overlay-content">
                <div class="zoom-icon">
                  <a href="images/gallery/1.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                </div>
                <span>Pedro Amaral</span>
                <h2>Educa Brasil</h2>
              </div><!-- /.overlay-content -->
            </div>
          </div><!-- /.tr-photo -->
        </li>
        <li>
          <div class="tr-photo">
            <img src="images/gallery/2.jpg" alt="Image" class="img-fluid">
            <div class="photo-overlay">
              <div class="overlay-content">
                <div class="zoom-icon">
                  <a href="images/gallery/2.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                </div>
                <span>Comunidade da roçinha</span>
                <h2>Salvador sem fome</h2>
              </div><!-- /.overlay-content -->
            </div>
          </div><!-- /.tr-photo -->
        </li>
        <li>
          <div class="tr-photo">
            <img src="images/gallery/3.jpg" alt="Image" class="img-fluid">
            <div class="photo-overlay">
              <div class="overlay-content">
                <div class="zoom-icon">
                  <a href="images/gallery/3.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                </div>
                <span>Jõao Pedro</span>
                <h2>Campanha de agasalhos</h2>
              </div><!-- /.overlay-content -->
            </div>
          </div><!-- /.tr-photo -->
        </li>
        <li>
          <div class="tr-photo">
            <img src="images/gallery/4.jpg" alt="Image" class="img-fluid">
            <div class="photo-overlay">
              <div class="overlay-content">
                <div class="zoom-icon">
                  <a href="images/gallery/4.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                </div>
                <span>Nice Silva</span>
                <h2>Educação para todos</h2>
              </div><!-- /.overlay-content -->
            </div>
          </div><!-- /.tr-photo -->
        </li>
        <li>
          <div class="tr-photo">
            <img src="images/gallery/5.jpg" alt="Image" class="img-fluid">
            <div class="photo-overlay">
              <div class="overlay-content">
                <div class="zoom-icon">
                  <a href="images/gallery/5.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                </div>
                <span>Agatha Moreira</span>
                <h2>Educa Brasil</h2>
              </div><!-- /.overlay-content -->
            </div>
          </div><!-- /.tr-photo -->
        </li>
        <li>
          <div class="tr-photo">
            <img src="images/gallery/6.jpg" alt="Image" class="img-fluid">
            <div class="photo-overlay">
              <div class="overlay-content">
                <div class="zoom-icon">
                  <a href="images/gallery/6.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a>
                </div>
                <span>Comunidade da roçinha</span>
                <h2>Salvador sem fome</h2>
              </div><!-- /.overlay-content -->
            </div>
          </div><!-- /.tr-photo -->
        </li>
      </ul>
    </div><!-- /.section-content -->
  </div><!-- /.tr-photo-gallery -->

  <div id="courses" class="tr-courses">
    <div class="section-content tr-bg-white">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Cursos</h1>
          <div class="sub-title title-before">
            <p>
              Nós oferecemos cursos em determinados períodos do ano, desenvolvidos pelos nossos profissionais da área de educação. E a adesão é livre para todos :)
            </p>
          </div>
        </div>
        <div class="row">
          @foreach ($courses as $course)
            @if ($course->full == 0)
              <div class="col-md-6 col-lg-4">
                <div class="tr-post">
                  <div class="entry-header">
                    <div class="entry-thumbnail">
                      <a href="{{ route('site.course.show', $course->slug) }}">
                        <img src="{{ $course->image }}" alt="Imagem" class="img-fluid">
                      </a>
                    </div>
                    <h2 class="entry-title"><a href="{{ route('site.course.show', ['title' => $course->slug]) }}">{{ $course->title }}</a></h2>
                  </div><!-- /.entry-header -->
                </div><!-- /.tr-post -->
                <a href="{{route('site.course.post')}}">Ver mais</a>
              </div>
              @else
            @endif
          @endforeach
        </div>
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div>

  <div id="blog" class="tr-blog">
    <div class="section-content">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Ultimas notícias</h1>
          <div class="sub-title title-before">
            <p>Confira aqui todas as novidades da nossa insituição!</p>
          </div>
        </div><!-- /.section-header -->
        <div class="row">
          @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4">
              <div class="tr-post">
                <div class="entry-header">
                  <div class="entry-thumbnail">
                    <a href="{{ route('site.post.show', $post->slug) }}">
                      <img src="{{ $post->image }}" alt="Imagem" class="img-fluid">
                    </a>
                  </div>
                  <h2 class="entry-title"><a href="{{ route('site.post.show', $post->slug) }}">{{ $post->title }}</a></h2>
                </div><!-- /.entry-header -->
              </div><!-- /.tr-post -->
            </div>
          @endforeach
        </div><!-- /.row -->
        <a href="{{ route('site.post') }}">Ver mais</a>
      </div><!-- /.container -->
    </div><!-- /.blog-content -->
  </div><!-- /.tr-blog -->

  <div class="tr-clients">
    <div class="section-content section-before tr-parallax bg-image" style="background-image: none;">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Principais parceiros</h1>
          <div class="sub-title title-before">
            <p>Estes aqui, são todas as incríveis empresas que apoiam as nossas causas!</p>
          </div>
        </div><!-- /.section-header -->
        <div class="row">
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/1.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/2.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/3.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/4.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/5.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/6.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/7.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="clients">
              <img src="images/clients/8.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-clients -->

  <div id="contact" class="tr-contact-section">
    <div class="section-content tr-bg-white">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Onde nos achar</h1>
          <div class="sub-title title-before">
            <p>Entre em contato conosco, nós vamos adorar conversar com você!!</p>
          </div>
        </div><!-- /.section-header -->
        <div class="row">
          <div class="col-md-7">
            <form action="#" class="tr-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" name="name" type="text" placeholder="Nome" value="" size="30" aria-required="true" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" type="text" placeholder="E-mail" value="" size="30" aria-required="true" required="required">
                  </div>
                </div>
              </div><!-- /.row -->
              <div class="form-group">
                <textarea name="message" class="form-control" required="required" rows="7" placeholder="Escreva aqui. . ."></textarea>
              </div>
              <input type="submit" class="btn btn-primary btn-full" value="Enviar">
            </form><!-- /.tr-form -->
          </div>
          <div class="col-md-5">
            <div class="contact-info">
              <ul class="global-list">
                <li>
                  <div class="contact-icon">
                    <img src="images/others/location.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="tr-info">
                    <h2>Endereço</h2>
                    <address>Rua A, número 01 <br> Pelourinho, Salvador, BA</address>
                  </div>
                </li>
                <li>
                  <div class="contact-icon">
                    <img src="images/others/contact.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="tr-info">
                    <h2>Contato</h2>
                    <ul class="global-list">
                      <li>Tel : (71) 9 9291-6323</li>
                      <li>Email : contato@montepioartifices.com</li>
                      <li>Site : <a href="#">www.montepioartifices.com.br</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div><!-- /.contact-info -->
          </div>
        </div>
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-contact-section -->

  <div class="tr-help-section">
    <div class="section-content section-before tr-parallax bg-image" style="background-image: none;">
      <div class="container">
        <div class="section-header text-center">
          <h1>Como ajudar?</h1>
        </div>
        <div class="help-content">
          <div class="row">
            <div class="col-md-4">
              <div class="tr-help">
                <a style="cursor: pointer">
                  <span class="tr-icon">
                    <img src="images/others/icon1.png" alt="Image" class="img-fluid">
                  </span>
                  <span class="help-info">
                    <span>Compartilhe</span>
                    <span class="title">com todos!</span>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tr-help">
                <a href="doar">
                  <span class="tr-icon">
                    <img src="images/others/icon2.png" alt="Image" class="img-fluid">
                  </span>
                  <span class="help-info">
                    <span>Doe</span>
                    <span class="title">Para uma vida!</span>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tr-help">
                <a style="cursor: pointer">
                  <span class="tr-icon">
                    <img src="images/others/icon3.png" alt="Image" class="img-fluid">
                  </span>
                  <span class="help-info">
                    <span>Ajude</span>
                    <span class="title">O próximo!</span>
                  </span>
                </a>
              </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.help-content -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-help-section -->
@endsection
