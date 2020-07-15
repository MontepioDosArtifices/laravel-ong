@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="fechar">&times;</a></p>
  @endif
@endforeach

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <b>Erros: </b>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
