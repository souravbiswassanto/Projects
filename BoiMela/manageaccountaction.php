<?php 
	include 'config.php';
	include 'database.php';
	include 'header.php';
 ?>
 <?php 
 	if(isset($_POST['submit'])){
 		$Name=$_POST['Name'];
 		$Phone=$_POST['Phone'];
 		$Password=$_POST['Password'];

 		$id=Session::get("id");

 		$file_name = $_FILES['Image']['name'];
		$file_size = $_FILES['Image']['size'];
		$file_temp = $_FILES['Image']['tmp_name'];

		$db=new database();

		if($file_name){
			
		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "profilepic/".$unique_image;
		$permitted = array('jpg','jpeg','png','gif','JPG','JPEG','PNG');
								

		if (in_array($file_ext, $permitted) === false) {
			Session::set("extension","Invalid Image Format");
			header("Location:manageaccount.php");
		}else{
			move_uploaded_file($file_temp,$uploaded_image);

		}
		$query="UPDATE account 
		SET Name='$Name',Phone='$Phone',Password='$Password',Image='$uploaded_image' WHERE id='$id'";
		}
		else
		{
			$query="UPDATE account 
		SET Name='$Name',Phone='$Phone',Password='$Password' WHERE id='$id'";
		}

		if(Session::get("extension")=="")
		{
			$result=$db->update($query);
		}

 		if($result)
 		{
 			header("Location:myaccount.php");
 			//header("Location:manageaccount.php");
 		}
 		else
 		{
 			header("Location:manageaccount.php");
 		}
 	}
  ?>