<?php 
	include 'config.php';
	include 'database.php';
	include 'header.php';
 ?>
 <?php 
 		$Book_Name=$_POST['Book_Name'];
		$Authors_Name =$_POST['Authors_Name'];
 		$Location=$_POST['Location'];
 		$Price=$_POST['Price'];
 		$Details=$_POST['Details'];

 		$id=$_GET['id'];

 		//echo "id=".$id;

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
		}else{
			move_uploaded_file($file_temp,$uploaded_image);
		}

		$query="UPDATE advertisement 
		SET Book_Name='$Book_Name',Authors_Name='$Authors_Name',Location='$Location',Details='$Details',Price='$Price',Image='$uploaded_image' WHERE id='$id'";
		}
		else{
			$query="UPDATE advertisement 
			SET Book_Name='$Book_Name',Authors_Name='$Authors_Name',Location='$Location',Details='$Details',Price='$Price' WHERE id='$id'";
		}

		if(Session::get("extension")==""){
			$result=$db->update($query);
		}

 		if($result)
 		{
 			header("Location:manageadd.php");
 		}
 		else{
 			Session::set("updateid",$id);
 			header("Location:updateadd.php");
 		}
  ?>