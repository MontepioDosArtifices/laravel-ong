      @extends('template.dashboard')

      @section('title')
        Cadastrar despesas
      @endsection

      @section('content')
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-7 align-self-center">
              <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
                Cadastrar despesas
              </h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item">
                      <a href="index.html" class="text-muted">
                        Financeiro
                      </a>
                    </li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">
                      Despesas
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-5 align-self-center">
              <div class="customize-input float-right">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                  <option selected>Jul 01</option>
                  <option value="1">Jun 01</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <form action="{{route('user.create')}}" method="post">
            <h1>Despesas</h1>
            @csrf
            <select name="category_id" class="form-control">
              @foreach($allCategories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
            <input type="text" name="value" class="form-control" placeholder="Valor" required>
            <textarea name="description" class="form-control" cols="30" rows="2" placeholder="Descrição" required></textarea>
            <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
            <input type="date" name="payment_date" class="form-control" required></br>
            <input type="submit" class="btn btn-primary form-control" value="Cadastrar">
          </form>
        </div>
      </div>
      @endsection

