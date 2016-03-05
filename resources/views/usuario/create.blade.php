@extends('layout.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Soporte <small>Agregar usuarios</small>
        </h1>
    </div>
</div>
<!-- /. ROW  -->
@stop
@section('content2')
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
      @include('usuario.form.usr')
      <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="form-group">
          {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}  </div>
      </div>
    {!!Form::close()!!}
@stop
