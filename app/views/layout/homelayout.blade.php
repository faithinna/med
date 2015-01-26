
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>MediFile</title>    
    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.css') }}
    {{HTML::style('css/font-awesome.css') }}
    {{ HTML::style('css/index.css') }}
    {{ HTML::style('css/carousel.css') }}
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{URL::route('home')}}"><span style="color:crimson;" class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp MediFile</a>
             </div>
             <div id="navbar" class="navbar-collapse collapse">
              <ul id="nav_list"  class="nav navbar-nav  navbar-right">
                <li id="home"><a  href="{{URL::route('home')}}"><span class="glyphicon glyphicon-home"></span> Home</a>
                </li>
                <li id="news" class="dropdown">
                <a  href="{{URL::route('news')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-newspaper-o"></i> News<span class="caret"></span>
                </a>
                  <ul class="dropdown-menu dropdown-menu-left" role="menu">
                    <li><a href="{{URL::route('events')}}">Events</a></li>
                    <li><a href="{{URL::route('announcements')}}">Anouncements</a></li>
                  </ul>
                </li>
                <li id="about"><a  href="{{URL::route('about')}}"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                <li id="contact"><a  href="{{URL::route('contact')}}"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
                <li><a class="disable" href="#">&nbsp  </a></li>
                @if(!isset(Sentry::getUser()->email ))
             <li id="login">
             <a  href="{{URL::to('/login')}}" ><span class="glyphicon glyphicon-user"></span> Login</a>
            </li>            
             @else
                <li id="login_user" class="dropdown">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{Sentry::getUser()->email}} <span class="caret"></span>
                </a>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="{{ URL::to('/user/logout') }}">Logout</a></li>
                    <li><a href="#">Profile</a></li>
                  </ul>
              </li> 
              @endif 
                 
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    @yield('carousel')
    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

     @yield('content')
      <!-- Three columns of text below the carousel -->      

     <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 SoftLinks, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
  
       {{ HTML::script('js/jquery-1.11.1.js') }}
       {{ HTML::script('js/bootstrap.js') }}
       {{ HTML::script('js/ie10-viewport-bug-workaround.js') }}
       {{ HTML::script('js/ie-emulation-modes-warning.js') }}
       {{ HTML::script('js/bootlint.js') }}
       {{ HTML::script('js/jquery.bootpag.js') }}
        {{ HTML::script('js/holder.js') }}
       {{ HTML::script('js/index.js') }}
 
 <!-- <script type="text/javascript">
  javascript:(function(){var s=document.createElement("script");s.onload=function(){bootlint.showLintReportForCurrentDocument([]);};s.src="https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js";document.body.appendChild(s)})();
  </script>
  -->
  </body>
</html>
