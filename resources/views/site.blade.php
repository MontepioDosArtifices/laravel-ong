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
                <h3>Nós estamos em 30 países</h3>
              </div><!-- /.featured -->
            </div>
            <div class="col-md-4">
              <div class="featured">
                <div class="featured-icon">
                  <img src="images/others/featured2.png" alt="Image" class="img-fluid">
                </div>
                <h2>Promessa</h2>
                <h3>70% das doações vão para as causas</h3>
              </div><!-- /.featured -->
            </div>
            <div class="col-md-4">
              <div class="featured">
                <div class="featured-icon">
                    <img src="images/others/featured3.png" alt="Image" class="img-fluid">
                </div>
                <h2>Nossa ajuda</h2>
                <h3>Nós ajudamos pessoas desde 1987</h3>
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
            <div class="col-lg-4">
              <h1>Sociedade Montepio dos Artífices</h1>
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
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
              <a href="#">Ler mais</a>
            </div><!-- /.tr-service -->
          </div>
          <div class="col-md-4">
            <div class="tr-service">
              <div class="service-icon">
                <img src="images/others/service2.png" alt="Image" class="img-fluid">
              </div>
              <h2>Doações</h2>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
              <a href="#">Ler mais</a>
            </div><!-- /.tr-service -->
          </div>
          <div class="col-md-4">
            <div class="tr-service">
              <div class="service-icon">
                <img src="images/others/service3.png" alt="Image" class="img-fluid">
              </div>
              <h2>Arrecadados</h2>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
              <a href="#">Ler mais</a>
            </div><!-- /.tr-service -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.service-content -->
  </div><!-- /.tr-service -->

  <div id="causes" class="tr-causes-section">
    <div class="section-content tr-bg-white">
      <div class="container">
        <div class="section-header section-header-2">
            <h1>Nossas causas</h1>
            <div class="sub-title title-before">
                <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
            </div>
        </div><!-- /.section-header -->

        <div class="causes-content">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="tr-causes">
                <div class="causes-thumb">
                  <img src="images/causes/1.jpg" alt="Image" class="img-fluid">
                  <div class="tr-overlay">
                    <div class="tr-paragraph">
                      <p>Insira aqui o texto que deverá ser usado nesta área do site! Insa aqui o texto que ...</p>
                    </div>
                    <div class="tr-donation">
                      <ul class="global-list">
                        <li>Arrecadado: R$ 6.300</li>
                        <li>Meta:  R$ 75.000</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary">Apoiar causa</a>
                  </div>
                </div>
                <h2><a href="#">Causa 01</a></h2>
                <span>Destino da causa</span>
              </div><!-- /.tr-causes -->
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="tr-causes">
                <div class="causes-thumb">
                  <img src="images/causes/2.jpg" alt="Image" class="img-fluid">
                  <div class="tr-overlay">
                    <div class="tr-paragraph">
                      <p>Insira aqui o texto que deverá ser usado nesta área do site! Insa aqui o texto que ...</p>
                    </div>
                    <div class="tr-donation">
                      <ul class="global-list">
                        <li>Arrecadado: R$ 6.300</li>
                        <li>Meta:  R$ 75.000</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary">Apoiar causa</a>
                    </div>
                  </div>
                  <h2><a href="#">Causa 02</a></h2>
                  <span>Destino da causa</span>
                </div><!-- /.tr-causes -->
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="tr-causes">
                <div class="causes-thumb">
                  <img src="images/causes/3.jpg" alt="Image" class="img-fluid">
                  <div class="tr-overlay">
                    <div class="tr-paragraph">
                      <p>Insira aqui o texto que deverá ser usado nesta área do site! Insa aqui o texto que ...</p>
                    </div>
                    <div class="tr-donation">
                      <ul class="global-list">
                        <li>Arrecadado: R$ 6.300</li>
                        <li>Meta:  R$ 75.000</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary">Apoiar causa</a>
                    </div>
                  </div>
                  <h2><a href="#">Causa 02</a></h2>
                  <span>Destino da causa</span>
                </div><!-- /.tr-causes -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.causes-content -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-causes-section -->

  <div id="about" class="tr-about-section">
    <div class="section-content tr-bg-white">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Quem nós somos</h1>
          <div class="sub-title title-before">
            <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
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
              <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar. Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
            </div>
            <div class="tr-about">
              <h2>Missão</h2>
              <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar. Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
            </div>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <div class="tr-about">
                  <h2>Como nós ajudamos ?</h2>
                  <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar. Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="tr-about">
                  <h2>Por que escolhemos ajudar?</h2>
                  <p>Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar. Nós fazemos a diferença na vida das pessoas durantes fases difíceis. Contribuindo com medicamento, comida e um lar.</p>
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
            <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site! </p>
          </div>
        </div><!-- /.section-header -->

        <div class="tr-faq-content">
          <div class="row">
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Primeira pergunta</h2>
                <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site!</p>
              </div><!-- /.tr-faq -->
            </div>
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Segunda pergunta</h2>
                <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site!</p>
              </div><!-- /.tr-faq -->
            </div>
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Terceira pergunta</h2>
                <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site!</p>
              </div><!-- /.tr-faq -->
            </div>
            <div class="col-md-6">
              <div class="tr-faq">
                <h2>Quarta pergunta</h2>
                <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site!</p>
              </div><!-- /.tr-faq -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.tr-faq-content -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-faq-section -->

  <div id="blog" class="tr-blog">
    <div class="section-content">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Ultimas notícias</h1>
          <div class="sub-title title-before">
            <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site!</p>
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
                  <div class="entry-footer clearfix">
                    <ul class="tr-list">
                      <li class="float-left">
                        <span class="tr-author">
                          <img src="images/others/author1.png" class="img-fluid" alt="Image">
                        </span>
                        <a href="#"><span>Por</span> Admin</a>
                      </li>
                      <li class="float-right tr-date">{{ date('d/m/Y', strtotime($post->created_at)) }}</li>
                    </ul>
                  </div>
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
            <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site! </p>
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

  <div class="tr-subscribe">
    <div class="section-content tr-parallax bg-image" style="background-image: none; position: relative; z-index: 0;">
      <div class="container text-center">
        <div class="subscribe-info">
          <h1>Receba nossas novidades</h1>
          <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site!</p>

          <form action="#" class="tr-form">
            <input type="email" class="form-control" placeholder="Digite seu e-mail">
            <input type="submit" class="btn btn-primary" value="Inscreva-se agora">
          </form>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-content -->
  </div><!-- /.tr-subscribe -->

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
                <span>Nome Sobrenome</span>
                <h2>Título da causa</h2>
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
                <span>Nome Sobrenome</span>
                <h2>Título da causa</h2>
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
                <span>Nome Sobrenome</span>
                <h2>Título da causa</h2>
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
                <span>Nome Sobrenome</span>
                <h2>Título da causa</h2>
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
                <span>Nome Sobrenome</span>
                <h2>Título da causa</h2>
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
                <span>Nome Sobrenome</span>
                <h2>Título da causa</h2>
              </div><!-- /.overlay-content -->
            </div>
          </div><!-- /.tr-photo -->
        </li>
      </ul>
    </div><!-- /.section-content -->
  </div><!-- /.tr-photo-gallery -->

  <div id="contact" class="tr-contact-section">
    <div class="section-content tr-bg-white">
      <div class="container">
        <div class="section-header section-header-2">
          <h1>Onde nos achar</h1>
          <div class="sub-title title-before">
            <p>Insira aqui o texto que deverá ser usado nesta área do site! Insira aqui o texto que deverá ser usado nesta área do site!</p>
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
                      <li>Tel : (71) 99999-9999</li>
                      <li>Email : contato@montepio.com.br</li>
                      <li>Site : <a href="#">www.montepio.com.br</a></li>
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
                <a href="#">
                  <span class="tr-icon">
                    <img src="images/others/icon1.png" alt="Image" class="img-fluid">
                  </span>
                  <span class="help-info">
                    <span>Compartilhe</span>
                    <span class="title">com outros</span>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tr-help">
                <a href="#">
                  <span class="tr-icon">
                    <img src="images/others/icon2.png" alt="Image" class="img-fluid">
                  </span>
                  <span class="help-info">
                    <span>Doe</span>
                    <span class="title">Para uma vida</span>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tr-help">
                <a href="#">
                  <span class="tr-icon">
                    <img src="images/others/icon3.png" alt="Image" class="img-fluid">
                  </span>
                  <span class="help-info">
                    <span>Salve</span>
                    <span class="title">A terra</span>
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
