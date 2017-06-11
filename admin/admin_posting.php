<?php
session_start();
if($_SESSION["usertype"]!=1)
{
  header('location:../index.php');
}

if($_SESSION["usertype"]==1)
{
if($_SESSION["status_log"])
{
include('connectdb.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Hijab-Qu</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.2.0/dist/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet" type="text/css">

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

    <!--editor tinymce-->
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>

    <!--konfigurasi tinymce-->
    <script type="text/javascript">
    tinymce.init({
      selector: "textarea#artikel"
    });
    </script>

  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin_posting.php">Posting</a></li>
            <li><a href="admin_listposting.php">List Posting</a></li>
            <li><a href="admin_listmember.php">List Member</a></li>
            <li><a href="../index2.php">Home</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a>Hi Admin, <?php echo $_SESSION["username"];?>!</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <form name="posting" method="POST" action="posting.php" enctype="multipart/form-data">
          <h3>Posting Artikel</h3>
          <table width="750" border="0">
            <tr>
              <td width="100" height="16">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top"><b>Judul</b></td>
              <td><input type="text" name="judul" id="judul" size="68"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><b>Kriteria</b></td>
              <td><select id="kritpost" name="kriteria" type="text">
                <option value="Info Terkini">Info Terkini</option>
                <option value="Travelling">Travelling</option>
                <option value="Tips & Trik">Tips & Trik</option>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top"><b>Artikel</b></td>
              <td height="300" valign="top"><textarea name="artikel" id="artikel" placeholeder="artikel" cols="70" rows="20"></textarea></td>
            </tr>
            <tr>
              <td align="center"><b>Gambar</b></td>
              <td align="left"><input type="hidden" name="MAX_FILE_SIZE" value"200000"><input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="20" align="top">&nbsp;</td>
              <td align="left"><input type="submit" value="Posting"></td>
            </tr>
          </table>
        </form>
      </div>
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 JoelNoem's, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
}
}
else
{
  header('location:../signin.html');
}
?>