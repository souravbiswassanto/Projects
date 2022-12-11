
<?php
	include 'config.php';
	include 'database.php';
	include 'header.php';
	Session::checkSession();
 ?>
<?php
	$I=$_GET['id'];
	
	$db=new database();
	$query="DELETE FROM advertisement WHERE id='$I'";

	$check=$db->delete($query);

	if($check)
	{
		header("Location:manageadd.php");
		exit();
	}
?>