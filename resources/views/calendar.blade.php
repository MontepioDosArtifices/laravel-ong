@extends('template.dashboard')

@section('title')
  Calendário
@endsection

@section('content')
<div class="page-wrapper">
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
          Calendário
        </h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item text-muted active" aria-current="page">
                Administrativo
              </li>
              <li class="breadcrumb-item text-muted" aria-current="page">
                Calendário
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="">
            <div class="row">
              <div class="col-lg-3 border-right pr-0">
                <div class="card-body border-bottom">
                  <h4 class="card-title mt-2">
                    Arrastar e soltar evento
                  </h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="calendar-events" class="d-flex flex-column justify-content-center">
                        <form id="event-form" class="d-flex flex-column justify-content-center">
                          @csrf
                          <div class="form-group">
                            <label for="title">Nome do evento</label>
                            <input type="text" name="title" placeholder="Nome do evento..." class="form-control" id="title">
                          </div>
                          <div class="form-group">
                            <label for="event_start">Início do evento</label>
                            <input type="date" name="start" class="form-control" id="event_start">
                          </div>
                          <div class="form-group">
                            <label for="event_end">Fim do evento</label>
                            <input type="date" name="end" class="form-control" id="event_end">
                          </div>
                          <div class="form-group">
                            <label for="className">Cor do evento</label>
                            <select name="className" class="form-control" id="className">
                              <option value="bg-info" selected>Azul</option>
                              <option value="bg-warning">Amarelo</option>
                              <option value="bg-danger">Vermelho</option>
                              <option value="bg-purple">Roxo</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                <div class="card-body b-l calender-sidebar">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
