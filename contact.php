<?php
error_reporting(E_ALL ^ E_NOTICE); //untuk menghilangkan report notice, terpaksa dipake karna noticenya gabisa ilang-_-
session_start();
if($_SESSION["status_log"])
{
  include('connectdb.php')
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/../favicon.ico">

    <title>Contact Us</title>
    <style>
    
    </style>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="sticky-footer-navbar.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.2.0/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.2.0/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Hijab-Qu</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="page_gossip.php">Informasi Terkini</a></li>
                <li><a href="page_travelling.php">Cerita Kami</a></li>
                <li><a href="page_tips.php">Tips&Trik</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a>Hi, <?php echo $_SESSION["username"];?>!</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--Content=======================-->

    <!--yuliza
    <div class="container marketing">
      <center><h2 class="featurette-heading">Kontak Kami</h2>
      <br><br>
      <justify><p class="lead">Jika ada kritik dan saran mengenai Website PeopLifestyel anda dapat menghubungi:<br>yulizaa.rahmi@gmail.com(Yuliza Rahmi) dan hanum.aulia@gmail.com(Hanum Aulia)<br><br>Terima Kasih Sudah Mengunjungi Website Kami ^__^</p></justify></center>
    </div>
    -->

    <div class="container marketing">
      <br><br><br><br><br>
      <center><h2 class="featurette-heading">Kontak Kami</h2>
      <br><br>
      <justify><p class="lead">Jika ada kritik dan saran mengenai Website PeopLifestyel anda dapat menghubungi:<br>hanum.aulia@gmail.com(Hanum) dan yulizaa.rahmi@gmail.com(Yuliza)<br><br>Terima Kasih Sudah Mengunjungi Website Kami ^__^</p></justify></center>
    </div><!-- /.container -->


    <!-- FOOTER -->
    <div class="footer">
      <div class="container">
        <p class="text-muted">&copy; 2016 JoelNoem's, Inc.</p>
      </div>
    </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.2.0/docs/assets/js/docs.min.js"></script>
  </body>
</html>

<?php
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/../favicon.ico">

    <title>Contact Us</title>
    <style>
    
    </style>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="sticky-footer-navbar.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.2.0/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.2.0/docs/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Hijab-Qu</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="page_gossip.php">Informasi Terkini</a></li>
                <li><a href="page_travelling.php">Cerita Kami</a></li>
                <li><a href="page_tips.php">Tips&Trik</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="signin.html">Sign In</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--Content=======================-->

    <!--yuliza
    <div class="container marketing">
      <center><h2 class="featurette-heading">Kontak Kami</h2>
      <br><br>
      <justify><p class="lead">Jika ada kritik dan saran mengenai Website PeopLifestyel anda dapat menghubungi:<br>yulizaa.rahmi@gmail.com(Yuliza Rahmi) dan hanum.aulia@gmail.com(Hanum Aulia)<br><br>Terima Kasih Sudah Mengunjungi Website Kami ^__^</p></justify></center>
    </div>
    -->

    <div class="container marketing">
      <br><br><br><br><br>
      <center><h2 class="featurette-heading">Kontak Kami</h2>
      <br><br>
      <justify><p class="lead">Jika ada kritik dan saran mengenai Website PeopLifestyel anda dapat menghubungi:<br>hanum.aulia@gmail.com(Hanum) dan yulizaa.rahmi@gmail.com(Yuliza)<br><br>Terima Kasih Sudah Mengunjungi Website Kami ^__^</p></justify></center>
    </div><!-- /.container -->


    <!-- FOOTER -->
    <div class="footer">
      <div class="container">
        <p class="text-muted">&copy; 2016 JoelNoem's, Inc.</p>
      </div>
    </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.2.0/docs/assets/js/docs.min.js"></script>
  </body>
</html>

<?php
}
?>

