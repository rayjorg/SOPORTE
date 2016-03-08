@extends('layout.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Soporte <small>Agregar equipo desktop</small>
        </h2>
    </div>
</div>
<!-- /. ROW  -->
@stop
@section('content2')
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
      @include('almacenPc.form.usr')
      <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="form-group">
          {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
        </div>
      </div>
    {!!Form::close()!!}
@stop
