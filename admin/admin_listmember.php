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

$query_listmember		= "select id_member, date, username, email from member order by id_member asc";

$list_member	= mysql_query($query_listmember);

if(!$list_member)
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
            <li><a href="admin_posting.php">Posting</a></li>
            <li><a href="admin_listposting.php">List Posting</a></li>
            <li class="active"><a href="admin_listmember.php">List Member</a></li>
            <li><a href="../index.php">Home</a></li>
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
          <h2>Daftar Member</h2><br>
          <table width="1000" border="1">
            <tr bgcolor="#A34747">
            	<td class="judultabel" width="80" align="center"><b>Nomor</b></td>
            	<td class="judultabel" width="120" align="center"><b>Tanggal</b></td>
            	<td class="judultabel" width="200" align="center"><b>Email</b></td>
            	<td class="judultabel" width="120" align="center"><b>Username</b></td>
            </tr>

            <?php
            $i = 1;
            while($row = mysql_fetch_assoc($list_member))
            {
            	?>
            	<tr>
            	<td class="isitabel" align="center" valign="top"><?php echo $i; ?></td>
            	<td class="isitabel" align="center" valign="top"><?php echo $row["date"]; ?></td>
            	<td class="isitabel" align="center" valign="top"><?php echo $row["email"]; ?></td>
            	<td class="isitabel" align="center" valign="top"><?php echo $row["username"]; ?></td>
            </tr>
            <?php
            $i++;

            }
            ?>          
          </table>
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