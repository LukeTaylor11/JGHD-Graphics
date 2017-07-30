<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel = "stylesheet" href = "css/styles.css" type = "text/css">
        <link rel = "stylesheet" href = "css/font-awesome.min.css" type = "text/css">
        <link rel = "stylesheet" href = "css/animate.css" type = "text/css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
        <title>JGHD Graphics</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @yield('css')



    </head>
    <body>
    <section id = "intro-section">
      <!-- Navbar-->
      <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">JGHD Graphics</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home &nbsp; <i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a href = "/about-me">About &nbsp; <i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
            <li><a href="/portfolio">Portfolio &nbsp; <i class="fa fa-folder-open" aria-hidden="true"></i></a></li>
            <li><a href="/contact">Latest Updates &nbsp; <i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></li>
            <li><a href="/contact">Contact &nbsp; <i class="fa fa-phone" aria-hidden="true"></i></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
     </nav>
     <div id = "intro-text">
       <h1>Joshua Wilkinson</h1>
       <h3>Professional Graphic Designer</h3>
     </div>
    <!-- Intro Section -->
    <div class = "arrow-down">
        <i class="fa fa-chevron-down animated bounce infinite" aria-hidden="true" id = "scroll-down"></i>
    </div>

 </section>
 <section>
   @yield('content')
 </section>

 <footer>
   <div class = "social-media">
     <i class="fa fa-facebook-square" aria-hidden="true"></i>
     <i class="fa fa-instagram" aria-hidden="true"></i>
     <i class="fa fa-twitter-square" aria-hidden="true"></i><br>
        &copy; JGHD Graphics 2017
   </div>
 </footer>
  </body>

    <!-- JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type = "text/javascript">
    $(document).ready(function(){
      $(document).on('scroll', function(){
          $("#scroll-down").removeClass('animated');
      });
    });
    </script>

     @yield('js')
</html>
