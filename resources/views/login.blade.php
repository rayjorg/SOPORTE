



          <!DOCTYPE html>
          <html>

          <head>

            <meta charset="UTF-8">

            <title>Sistema de inventario login</title>

              <style>
          @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
          @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

          body{
          	margin: 0;
          	padding: 0;
          	background: #fff;

          	color: #fff;
          	font-family: Arial;
          	font-size: 12px;
          }

          .body{
          	position: absolute;
          	top: -20px;
          	left: -20px;
          	right: -40px;
          	bottom: -40px;
          	width: auto;
          	height: auto;
          	background-image: url(http://jornadabc.mx/sites/default/files/images/vicerrectoria_de_la_universidad_autonoma_de_baja_california.jpg);
          	background-size: cover;
          	-webkit-filter: blur(5px);
          	z-index: 0;
          }

          .grad{
          	position: absolute;
          	top: -20px;
          	left: -20px;
          	right: -40px;
          	bottom: -40px;
          	width: auto;
          	height: auto;
          	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
          	z-index: 1;
          	opacity: 0.7;
          }

          .header{
          	position: absolute;
          	top: calc(50% - 35px);
          	left: calc(50% - 255px);
          	z-index: 2;
          }

          .header div{
          	float: left;
          	color: #fff;
          	font-family: 'Exo', sans-serif;
          	font-size: 35px;
          	font-weight: 250;
          }

          .header div span{
          	color: #3c2a79 !important;

          }

          .login{
          	position: absolute;
          	top: calc(50% - 75px);
          	left: calc(50% - 50px);
          	height: 150px;
          	width: 350px;
          	padding: 10px;
          	z-index: 2;
          }

          .login input[type=text]{
          	width: 250px;
          	height: 30px;
          	background:#4ba678;
          	border: 2px solid rgba(255,255,255,0.6);
          	border-radius: 2px;
          	color: #fff;
          	font-family: 'Exo', sans-serif;
          	font-size: 16px;
          	font-weight: 400;
          	padding: 4px;
          }

          .login input[type=password]{
          	width: 250px;
          	height: 30px;
          	background:#4ba678;
          	border: 2px solid rgba(255,255,255,0.6);
          	border-radius: 2px;
          	color: #fff;
          	font-family: 'Exo', sans-serif;
          	font-size: 16px;
          	font-weight: 400;
          	padding: 4px;
          	margin-top: 10px;
          }

          .login input[type=button]{
          	width: 260px;
          	height: 35px;
          	background: #fff;
          	border: 1px solid #fff;
          	cursor: pointer;
          	border-radius: 2px;
          	color: #a18d6c;
          	font-family: 'Exo', sans-serif;
          	font-size: 16px;
          	font-weight: 400;
          	padding: 6px;
          	margin-top: 10px;
          }

          .login input[type=button]:hover{
          	opacity: 0.8;
          }

          .login input[type=button]:active{
          	opacity: 0.6;
          }

          .login input[type=text]:focus{
          	outline: none;
          	border: 1px solid rgba(255,255,255,0.9);
          }

          .login input[type=password]:focus{
          	outline: none;
          	border: 1px solid rgba(255,255,255,0.9);
          }

          .login input[type=button]:focus{
          	outline: none;
          }

          ::-webkit-input-placeholder{
             color: rgba(255,255,255,0.6);
          }

          ::-moz-input-placeholder{
             color: rgba(255,255,255,0.6);
          }
          </style>

              <script src="/login/js/prefixfree.min.js"></script>

          </head>

          <body>

            <div class="body"></div>
          		<div class="grad"></div>
          		<div class="header">
          			<div>UABC<span>soporte</span></div>
          		</div>
          		<br>
          		<div class="login">
                  @include('alerts.errors')
                  @include('alerts.request')

                  {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
                    {!!Form::text('email',null,['class'=>'bottomform', 'placeholder'=>'Correo'])!!}<br>
                    {!!Form::password('password',['class'=>'bottomform', 'placeholder'=>'Contraseña'])!!}<br>
                    {!!Form::submit('Iniciar',['class'=>'bt bt-'])!!}
                  {!!Form::close()!!}
          		</div>

            <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

          </body>

          </html>
