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
<div class="row">
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <a href="/almacen/create"><i class="material-icons" style="font-size:55px;color:black">computer</i></a>
                              </div>
                            <div class="panel-footer back-footer-green">
                                CPU
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                          <div class="panel-body">
                            <a href="/almacen/create"><i class="material-icons" style="font-size:55px;color:black">tv</i></a>
                          </div>
                          <div class="panel-footer back-footer-blue">
                            Monitor
                          </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                              <a href="/almacen/create"><i class="material-icons" style="font-size:55px;color:black">keyboard</i></a>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Teclado
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                              <a href="/almacen/create">
                                <i class="material-icons" style="font-size:55px;color:black">mouse</i>
                              </a>
                            </div>
                            <div class="panel-footer back-footer-brown">
                              Mouse
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                              <a href="/almacen/create">
                                <i class="fa fa-print" style="font-size:55px;color:black"></i>
                              </a>
                            </div>
                            <div class="panel-footer back-footer-green">
                              Impresora
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                          <div class="panel-body">
                            <a href="/almacen/create"><i class="material-icons" style="font-size:55px;color:black">laptop_chromebook</i></a>
                          </div>
                          <div class="panel-footer back-footer-blue">
                            Laptop
                          </div>
                        </div>
                    </div>
                </div>
@stop
