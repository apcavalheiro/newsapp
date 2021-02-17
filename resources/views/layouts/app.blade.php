<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewsApp</title>
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }}>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        @include('layouts.nav')

        @yield('conteudo')

        @include('layouts.rodape')
    </div>
    <script src={{ asset("js/jquery.min.js") }}></script>
    <script src={{ asset("js/bootstrap.min.js") }}></script>
  </body>
</html>