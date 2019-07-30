<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script> src="{{asset('js/app.js')}}"></script>
     <link href="{{asset('css/app.css')}}" rel="stylesheet">
     <link href="{{asset('css/index.css')}}" rel="stylesheet">
     <link href="{{asset('css/wholefamily.css')}}" rel="stylesheet">
     <!-- <link href="{{asset('css/wholefamily.js')}}" rel="stylesheet"> --> -->
        <script> src="{{asset('js/bootstrap.min.js')}}"></script>
    <img src="new.png" alt="">


     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

       
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Central Hub</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>welcome!</h1>
        <p>Central Hub provides the platform for a global connection between you,our services and all your devices.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>.
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Glade Services</h2>
          <p>Glade Resolve provides top end online and offline service to help keep your devices in checck and running at top performance. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Glade Accounts</h2>
          <p>Manage over 2 devices worldwide with a single account by subscribing to G-premium and have a first look in-depth into the new T9 connectivity technology. </p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
       </div>
        <div class="col-md-4">
          <h2>Glade T9</h2>
          <p> Experience the new connectivity Technology and get an overview of what T9 offers and its improved service on the Glade network.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>© 2019 Glade Ghana.</p>
      </footer>
    </div> <!-- /container -->
    <script>
        
        var headroom = new Headroom(elem, {
  "offset": 205,
  "tolerance": 5,
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp"
  }
});
headroom.init();

// to destroy
headroom.destroy();
    </script>



  
      @yield('content')
</body>
</html>