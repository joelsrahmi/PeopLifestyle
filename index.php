<?php
error_reporting(E_ALL ^ E_NOTICE); //untuk menghilangkan report notice, terpaksa dipake karna noticenya gabisa ilang-_- 
session_start();
if($_SESSION['status_log'])
{

  include('connectdb.php');
  $query_home = "select id_posting, date, judul, kriteria, artikel, gambar from posting order by id_posting desc";
  $home = mysql_query($query_home);
  $query_member = "select username from member where tipe='1'";
  $member      = mysql_query($query_member);

  if(!$home)
  {
    die("Tidak bisa mengambil data: ".mysql_error()."<br>");
  }

  ?>

  <!DOCTYPE html>

  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>PeopLifestyle, Informasi Gaya Hidup Masa Kini</title>

    <style>
    .konten{
      width: 800px;
      margin-right: auto;
      margin-left: auto;
    }

    </style>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0/dist/css/bootstrap.css" rel="stylesheet">

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
  <!-- NAVBAR====-->
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
              <a class="navbar-brand" href="#">PeopLifestyle</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="page_gossip.php">Informasi Terkini</a></li>
                <li><a href="page_travelling.php">Cerita Kami</a></li>
                <li><a href="page_tips.php">Tips&Trik</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>

              <!--nama member-->
              <ul class="nav navbar-nav navbar-right">
              <li><a>Hi, <?php echo $_SESSION["username"];?>!</a></li>
              <!--============-->

                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img\ds2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PeopLifestyle</h1>
  Gaya Hidup   <p>Web Berisi Informasi Gaya Hidup Masa Kini</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\22.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PeopLifestyle</h1>
  Gaya Hidup   <p>Web Berisi Informasi Gaya Hidup Masa Kini</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\18.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PeopLifestyle</h1>
  Gaya Hidup   <p>Web Berisi Informasi Gaya Hidup Masa Kini</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- KONTEN -->
      <?php
      $i = 1;
      while($row = mysql_fetch_assoc($home))
      {
        ?>
        <div class="konten">
            <h2><?php echo $row["judul"]; ?></h2>
            <h6><?php echo $row["date"]; ?></h6>
            <br>
            <center>
            <img style="max-width:550px;max-height:600px;" src="admin/temp/<?php echo $row["gambar"]; ?>" /></center>
            <br><br>
            <p align="justify"><?php echo(substr($row["artikel"],0,350)); ?>...</p>
            <a class="btn btn-primary" href="artikel.php?artikel=<?php echo $row["id_posting"]; ?>">Read More</a>
        </div>
        <hr class="featurette-devider">
        <?php
        $i++;
      }
      ?>
      <!-- /END THE KONTEN -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 JoelNoem's, Inc.</p>
      </footer>
      </div><!-- /.container -->

    


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
include('connectdb.php');

$query_home = "select id_posting, date, judul, kriteria, artikel, gambar from posting order by id_posting desc";
$home = mysql_query($query_home);
  ?>

  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>PeopLifestyle, Informasi Gaya Hidup Masa Kini</title>

    <style>
    .konten{
      width: 800px;
      margin-right: auto;
      margin-left: auto;
    }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0/dist/css/bootstrap.css" rel="stylesheet">

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
==================================================--> 
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
              <a class="navbar-brand" href="#">PeopLifestyle</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="page_gossip.php">Informasi Terkini</a></li>
                <li><a href="page_travelling.php">Cerita Kami</a></li>
                <li><a href="page_tips.php">Tips&Trik</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.html">Sign Up</a><li>
                <li><a href="signin.html">Sign In</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img\10.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PeopLifestyle.</h1>
Gaya Hidup    <p>Web Berisi Informasi Gaya Hidup Masa Kini</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\11.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PeopLifestyle</h1>
  Gaya Hidup   <p>Web Berisi Informasi Gaya Hidup Masa Kini</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\12.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PeopLifestyle</h1>
  Gaya Hidup   <p>Web Berisi Informasi Gaya Hidup Masa Kini</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel-->
      <!--
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img\3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Gossip & Informasi Terkini</h2>
          <p>Berisi Informasi Selebriti yang sedang in dan informasi terkini</p>
          <p><a class="btn btn-default" href="page_gossip.html" role="button">Lihat &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="img\14.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Travelling</h2>
          <p>Mencari rekomendasi untuk liburan nanti? ada di sini!</p>
          <p><a class="btn btn-default" href="page_travelling.html" role="button">Lihat &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="img\19.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Tips & Trik</h2>
          <p>Tips & Trik menarik seputar gaya hidup</p>
          <p><a class="btn btn-default" href="page_tips.html" role="button">Lihat &raquo;</a></p>
        </div>
      </div>
      <hr class="featurette-devider">
      -->

      <!-- KONTEN -->
      <?php
      $i = 1;
      while($row = mysql_fetch_assoc($home))
      {
        ?>
        <div class="konten">
            <h2><?php echo $row["judul"]; ?></h2>
            <h6><?php echo $row["date"]; ?></h6>
            <br>
            <center>
            <img style="max-width:550px;max-height:600px;" src="admin/temp/<?php echo $row["gambar"]; ?>" /></center>
            <br><br>
            <p align="justify"><?php echo(substr($row["artikel"],0,350)); ?>...</p>
            <a class="btn btn-primary" href="artikel.php?artikel=<?php echo $row["id_posting"]; ?>">Read More</a>
        </div>
        <hr class="featurette-devider">
        <?php
        $i++;
      }
      ?>
      <!-- /END THE KONTEN -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 JoelNoem's, Inc.</p>
      </footer>
      </div><!-- /.container -->

    


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
