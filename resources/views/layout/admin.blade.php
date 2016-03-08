<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin</title>
    <!-- Bootstrap Styles-->
    {!!Html::style('assets/css/bootstrap.css')!!}
    <!-- FontAwesome Styles-->
    {!!Html::style('assets/css/font-awesome.css')!!}
    <!-- Morris Chart Styles-->
    {!!Html::style('assets/js/morris/morris-0.4.3.min.css')!!}
    <!-- Custom Styles-->
    {!!Html::style('assets/css/custom-styles.css')!!}
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Administracion</a>
          </div>


            <ul class="nav navbar-top-links navbar-right">



                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="#"><i class="fa fa-users"></i>Usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/usuario/create"><i class="fa fa-user"></i>Agregar</a>
                            </li>
                            <li>
                                <a href="/usuario"><i class="fa fa-user"></i>Borrar o Actualizar</a>
                            </li>
                          </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-shield"></i>Almacen<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>

                                <li>
                                <a href="#">Agregar<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/almacenPc"><i class="fa fa-desktop"></i>Equipo Desktop</a>
                                    </li>
                                    <li>
                                        <a href="/almacen"><i class="fa fa-desktop"></i>Equipo Laptop</a>
                                    </li>
                                    <li>
                                        <a href="/almacen"><i class="fa fa-desktop"></i>Consumible PC</a>
                                    </li>
                                    <li>
                                        <a href="/almacen"><i class="fa fa-desktop"></i>Consumible Papeleria</a>
                                    </li>

                                </ul>

                            </li>

                            </li>
                            <li>
                                <a href="/agregar"><i class="fa fa-desktop"></i>Borrar</a>
                            </li>
                            <li>
                                <a href="ui-elements.html"><i class="fa fa-desktop"></i>Actualizar</a>
                            </li>
                          </ul>
                    </li>
                </ul>

            </div>


        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
              @yield('content')
                <div class="row">
                  @yield('content2')
                </div>
                <!-- /. ROW  -->



                <!-- /. ROW  -->

				<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    {!!Html::script('assets/js/jquery-1.10.2.js')!!}
    <!-- Bootstrap Js -->
    {!!Html::script('assets/js/bootstrap.min.js')!!}
    <!-- Metis Menu Js -->
    {!!Html::script('assets/js/jquery.metisMenu.js')!!}
    <!-- Morris Chart Js -->
    {!!Html::script('assets/js/morris/raphael-2.1.0.min.js')!!}
    {!!Html::script('assets/js/morris/morris.js')!!}
    <!-- Custom Js -->
    {!!Html::script('assets/js/custom-scripts.js')!!}


</body>

</html>
