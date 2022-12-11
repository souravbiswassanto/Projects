<?php 
	include 'config.php';
	include 'database.php';
	include 'session.php';
 ?>

 <?php 
 	if(isset($_POST['submit'])){
 		$Name=$_POST['Name'];
 		$Email=$_POST['Email'];
 		$Phone=$_POST['Phone'];
 		$Password1=$_POST['Password1'];
 		$Password2=$_POST['Password2'];
 		$Division=$_POST['Division'];

 		if($Password1==$Password2){

	 		$db=new database();

	 		$query="INSERT INTO account(Name,Email,Phone,Password,Division) VALUES
	 		('$Name','$Email','$Phone','$Password1','$Division');";

	 		$result=$db->insert($query);

	 		if($result)
	 		{
	 			header("Location:login.php");
	 		}
 		}
 		else{
 			Session::init();
 			Session::set("signupmsg","Passwords don't match");
 			header("Location:signup.php");
 		}
 	}
  ?>