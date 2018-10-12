
<!doctype html>
<html>
  <head>

        <title>CSRF Protection - Double Submit Cookies Pattern</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>


    </head>

    <body>
    <style>

      body {

          background-color: orange;

      }

    </style>

      <!-- nav bar start -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">#CSRF Protection </a>
          </div>
           <ul class="nav navbar-nav navbar-right">

          <?php
            if(!isset($_COOKIE['session_cookie'])) {
              echo "<li><a href='login.php'> Log In </a></li>";
            }
          ?>


          </ul>
        </div>
      </nav>
      <!-- navbar end -->

     <!-- body content start -->
    <h2 align='center'> CSRF Protection  </h2>
    <h1 align= 'center'> Double Submit Cookie Pattern </h1>
    <br>
  <!-- body content end -->

    </body>
  <html>