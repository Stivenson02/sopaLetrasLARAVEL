@extends('play.index')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Sopa de letras</div>
        <div class="panel-body">
          <div class="form-horizontal" >
            <div class="form-group">
              <div class="col-md-8 col-md-offset-2">
                <p class="text-center">El juego ha sido Guardado</p>
                <a href="{{url('/')}}" >
                <button type="submit" class="col-md-12 btn btn-success">
                  Hasta Luego
                </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
