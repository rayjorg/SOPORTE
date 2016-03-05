<div class="col-md-5 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('name','Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
  </div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('matricula','Matricula:')!!}
    {!!Form::text('matricula',null,['class'=>'form-control','placeholder'=>'Ingresa el No. matricula'])!!}
  </div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('telefono','Telefono o Ext.:')!!}
    {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa un numero telefonico'])!!}
  </div>
</div>
<div class="col-md-5 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('email','Correo:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa correo educativo'])!!}
  </div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('password','Contrasena:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa contrasena'])!!}
  </div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('password1','Repite Contrasena:')!!}
    {!!Form::password('password1',['class'=>'form-control','placeholder'=>'Repite contrasena'])!!}
  </div>
</div>
<div class="col-md-8 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('direccion','Ubicacion:')!!}
    {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa la ubicacion en uabc'])!!}
  </div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
  <div class="form-group">
    {!!Form::label('nivel','Nivel Usuario:')!!}
    {!!Form::text('nivel',null,['class'=>'form-control','placeholder'=>'Ingresa nivel de usuario'])!!}
  </div>
</div>
