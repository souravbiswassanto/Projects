<?php 
	include 'config.php';
	include 'database.php';
	include 'session.php';
 ?>

 <?php 
 	if(isset($_POST['submit'])){

 		$Email=$_POST['Email'];
 		$Password=$_POST['Password'];

 		$db=new database();

 		$query="SELECT * FROM account WHERE Email='$Email'";

 		$read=$db->select($query);

 		$row=$read->fetch_assoc();
		Session::init();
 		if($row['Password']==$Password){
 			
 			Session::set("login",true);
 			Session::set("id",$row['id']);
 			Session::set("email",$row['Email']);
 			Session::set("name",$row['Name']);
 			Session::set("phone",$row['Phone']);
 			Session::set("location",$row['Division']);
 			Session::set("password",$row['Password']);
 			header("Location:index.php");

 		}
 		else
 		{
 			//$msg="invalid";
 			Session::set("msg","invalid login");
 			header("Location:login.php");
 		}
 		/*else{
 			$msg="loginmsg","<div class=\"failed_login\"> Invalid Login</div>";
 			return $msg;
 		}*/
 	}
  ?>