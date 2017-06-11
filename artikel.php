<?php
error_reporting(E_ALL ^ E_NOTICE); //untuk menghilangkan report notice, terpaksa dipake karna noticenya gabisa ilang-_- 
session_start();
if($_SESSION["status_log"])
{
  $query_member = "select * from member where id_member=".$_SESSION["username"];
  $member = mysql_query($query_member);
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

    <title>Hijab-Qu, Informasi Hijab Masa Kini</title>

    <style>
    .konten{
      width: 800px;
      margin-right: auto;
      margin-left: auto;
    }
    .listkomen{
      width: 715px;
      margin-left: 220px;
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
                <li><a href="contact.php">Contact</a></li>
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
          <img src="img\16.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hijab-Qu.</h1>
              <p>Web Berisi Informasi Hijab Masa Kini</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\22.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hijab-Qu </h1>
              <p>Web Berisi Informasi Hijab Masa Kini</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\18.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hijab-Qu</h1>
              <p>Web Berisi Informasi Hijab Masa Kini</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <!-- end of carousel -->


    <div class="container marketing">  
      <!-- KONTEN -->
      <?php
          include('connectdb.php');

          $query_artikel = "select id_posting, judul, date, artikel, gambar from posting where id_posting=".$_GET["artikel"];

          $artikel = mysql_query($query_artikel);

          if(!$artikel)
          {
            die("could not get data : ".mysql_error());
          }

          while($row = mysql_fetch_assoc($artikel))
          {
            ?>

        <div class="konten">
            <h2><?php echo $row["judul"]; ?></h2>
            <h6><?php echo $row["date"]; ?></h6>
            <br>
            <center>
            <img style="max-width:550px;max-height:600px;" src="admin/temp/<?php echo $row["gambar"]; ?>" /></center>
            <br><br>
            <p align="justify"><?php echo $row["artikel"]; ?></p>
        </div>
        <br>
        <hr class="featurette-devider">
        <?php
      }
      ?>
      <!-- /END OF KONTEN -->

      <!--KOMENTAR-->
      <div class="komentar" align="left">
        <form name="comment" method="POST" action="komentar.php">
          <table align="center" border="0" width="1000">
            <tr>
              <td colspan="2" align="center"><h3><b>Silahkan Komentar</b></h3></td>
            </tr>
            <tr>
              <td width="100">&nbsp;</td>
              <td width="300"><input type="hidden" name="id_posting" id="id_posting" value="<?php echo $_GET["artikel"];?>" size="3"></td>
            </tr>
            <tr>
              <td align="right" valign="top">Username : </td>
              <td align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" id="username" value="<?php echo $_SESSION["username"];?>"readonly></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="right" valign="top">Komentar : </td>
              <td align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="komentar" cols="100" rows="9"></textarea></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="komen" id="komen" value="Submit"></td>
            </tr>
          </table>
        </form>
      </div>
      <br>
      <br>
      <hr>

      <?php
      $query_sub_komen  = "select username, tgl, komentar from komentar where id_posting='".$_GET["artikel"]."' order by tgl desc";

      $submit_komen     = mysql_query($query_sub_komen);

      if(!$submit_komen)
      {
        die("tidak dapat menemukan data : ".mysql_error());
      }  
      while($row = mysql_fetch_assoc($submit_komen))
      {
      ?>

      <div class="listkomen" >
        <h4><?php echo $row["username"];?></h4>
        <p><?php echo $row["tgl"]; ?></p>
        <p class="mamen"><?php echo $row["komentar"]; ?></p>
      </div>
      <hr>

      <?php
    }
    ?>

<!--END OF KOMENTAR-->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right" align="center" cols="30"><a href="#">Back to top</a></p>
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

$query_artikel = "select id_posting, judul, date, artikel, gambar from posting where id_posting=".$_GET["artikel"];

$artikel = mysql_query($query_artikel);

if(!$artikel)
{
  die("could not get data : ".mysql_error());
}

while($row = mysql_fetch_assoc($artikel))
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
    <link rel="icon" href="">

    <title>Hijab -Qu, Informasi Hijab Masa Kini</title>

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
                <li><a href="contact.php">Contact</a></li>
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
          <img src="img\16.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hijab-Qu.</h1>
              <p>Web Berisi Informasi Hijab Masa Kini</p>
              <p><a class="btn btn-lg btn-primary" href="signup.html" role="button">Sign up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\22.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hijab-Qu</h1>
              <p>Web Berisi Informasi Hijab Masa Kini</p>
              <p><a class="btn btn-lg btn-primary" href="signup.html" role="button">Sign up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img\18.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Hijab-Qu</h1>
              <p>Web Berisi Informasi Hijab Masa Kini</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up</a></p>
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
        <div class="konten">
            <h2><?php echo $row["judul"]; ?></h2>
            <h6><?php echo $row["date"]; ?></h6>
            <br>
            <center>
            <img style="max-width:550px;max-height:600px;" src="admin/temp/<?php echo $row["gambar"]; ?>" /></center>
            <br><br>
            <p align="justify" length="100"><?php echo $row["artikel"]; ?></p>
        </div>
        <hr class="featurette-devider">
        <?php
      }
      ?>
      <!-- /END THE KONTEN -->

      <!--belum sign in-->
      <div class="blmkomen" align ="center">
      <p>Silahkan <a href="signin.html">Login</a> untuk melakukan komentar</p>
      <p>Belum punya akun? ayo daftar akun Hijab-Qu sekarang! Silahkan<a href="signup.html"> Signup untuk daftar</a></p>
      </div>
      <br><br>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 JoelNoem's, Inc.</p>
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