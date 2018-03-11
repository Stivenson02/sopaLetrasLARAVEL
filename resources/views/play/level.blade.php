@extends('play.index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nivel</div>
                <div class="panel-body">
                    <div class="form-horizontal" >

                        <div class="form-group">


                            <div class="col-md-8 col-md-offset-2">
                                <form  role="form" method="POST" action="{{ route('level_paht') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$user}}" name="user">
                                    <input type="hidden" value="1" name="level">
                                    <button type="submit" class="col-md-12 btn btn-success">
                                        Facil
                                    </button>
                                </form>
                            </div>
                            <br><br>
                            <div class=" col-md-8 col-md-offset-2">
                                <form  role="form" method="POST" action="{{ route('level_paht') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$user}}" name="user">
                                    <input type="hidden" value="2" name="level">
                                    <button type="submit" class="col-md-12 btn btn-warning">
                                        Normal
                                    </button>
                                </form>
                            </div>
                            <br><br>
                            <div class="col-md-8 col-md-offset-2">
                                <form  role="form" method="POST" action="{{ route('level_paht') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$user}}" name="user">
                                    <input type="hidden" value="3" name="level">
                                    <button type="submit" class="col-md-12 btn btn-danger">
                                        Dificil
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
