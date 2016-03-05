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
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          Usuarios
      </div>
      <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Nivel</th>
                        <th>direccion</th>
                        <th>Actualizar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                @foreach($users as $user)
                <tbody>
                  <tr class="odd gradeX">
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->nivel}}</td>
                  <td>{{$user->direccion}}</td>
                  <td>
                    {!!link_to_route('usuario.edit',$title= 'Editar',$parameters= $user->id,$attributes=['class'=>'btn btn-primary'])!!}
                  </td>
                  <td>
                    {!!Form ::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
                      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                    {!!Form::close()!!}
                  </td>
                </tbody>
                @endforeach
            </table>
            {!!$users->render()!!}
          </div>
        </div>
      </div>
    </div>
  </div>
	@stop
