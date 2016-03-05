@extends('layout.admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Soporte <small>Actualizar usuario</small>
        </h1>
    </div>
</div>
<!-- /. ROW  -->
@stop
@section('content2')
    {!!Form::model($user,['route'=>['usuario.update',$user], 'method'=>'PUT'])!!}
      @include('usuario.form.usr')
      <div class="col-md-2 col-sm-12 col-xs-12">
        <div class="form-group">
          {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        </div>
      </div>
      {!!Form::close()!!}
      {!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
      <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="form-group">
          {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
        </div>
      </div>
      {!!Form::close()!!}
@stop
