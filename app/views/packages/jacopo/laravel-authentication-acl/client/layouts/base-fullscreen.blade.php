<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/baselayout.css') }}
    {{ HTML::style('css/fonts.css') }}
    {{ HTML::style('css/font-awesome.css') }}
    {{ HTML::style('css/strength.css') }}

    @yield('head_css')
    {{-- End head css --}}


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
       <a class="navbar-brand" href="{{URL::route('home')}}"><span style="color:crimson;" class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp MediFile</a>
    </div>
  </div>
</nav>
</head>

    <body>
        <div class="container-full">
            @yield('content')
        </div>
        <div style="height:300px">
        &nbsp
        </div>
           <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p style="text-align:center">&copy; 2014 SoftLinks, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    {{ HTML::script('js/jquery-1.10.2.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    </body>
</html>