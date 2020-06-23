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
                      <div id="calendar-events" class="">
                        <div class="calendar-events mb-3" data-class="bg-info"><i class="fa fa-circle text-info mr-2"></i>Evento um</div>
                          <div class="calendar-events mb-3" data-class="bg-success">
                            <i class="fa fa-circle text-success mr-2"></i>
                            Evento dois
                          </div>
                          <div class="calendar-events mb-3" data-class="bg-danger">
                            <i class="fa fa-circle text-danger mr-2"></i>
                            Evento três
                          </div>
                          <div class="calendar-events mb-3" data-class="bg-warning">
                            <i class="fa fa-circle text-warning mr-2"></i>
                            Evento quatro
                          </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="drop-remove">
                          <label class="custom-control-label" for="drop-remove">
                            Remover depois de soltar
                          </label>
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
