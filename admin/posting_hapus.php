<?php
include('connectdb.php');

$query_del_posting	= "delete from posting where id_posting=".$_GET["posting"];
$delete_posting		= mysql_query($query_del_posting);

if($delete_posting)
{
	header('location:admin_listposting.php');
}
else
{
	echo"Query error : ".mysql_error();
}

?>