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
        <title>JGHD Graphics</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



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
          <a class="navbar-brand" href="#">JGHD Graphics</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home &nbsp; <i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a href="/portfolio">Portfolio &nbsp; <i class="fa fa-folder-open" aria-hidden="true"></i></a></li>
            <li><a href="/contact">Latest Updates &nbsp; <i class="fa fa-exclamation-circle" aria-hidden="true"></i></a></li>
            <li><a href="/contact">Contact &nbsp; <i class="fa fa-phone" aria-hidden="true"></i></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
     </nav>
     <div id = "intro-text">
       <h1>Joshua Wilkinson</h1>
       <h3>Proffesional Graphic Designer
     </div>
    <!-- Intro Section -->
 </section>
 <section id = "main-section">
   <div class = "row">
     <div class = "col-md-4" id = "about">
       <div class = "content">
         <h3>About</br><span>Me</span></h3>
         <a href = "/about-me"><button>more</button></a>
       </div>
     </div>
     <div class = "col-md-4" id = "portfolio">
      <div class = "content">
        <h3>View</br><span>Portfolio</span></h3>
         <a href = "/portfolio"><button>more</button></a>
      </div>
     </div>
     <div class = "col-md-4" id = "latest-updates">
       <div class = "content">
         <h3>Latest</br><span>Updates</span></h3>
          <a href = "/latest-updates"><button>more</button></a>
       </div>
     </div>
   </div>
 </section>
 <footer>
   <div class = "social-media">
     <i class="fa fa-facebook-square" aria-hidden="true"></i>
     <i class="fa fa-instagram" aria-hidden="true"></i>
     <i class="fa fa-twitter-square" aria-hidden="true"></i>
   </div>
   &copy; JGHD Graphics 2017
 </footer>
  </body>

    <!-- JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
