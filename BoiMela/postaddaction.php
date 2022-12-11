<?php 
	include 'config.php';
	include 'database.php';
	include 'header.php';
	include 'StringCompare.php';
 ?>

 <?php 

 	if(isset($_POST['submit'])){
	 	$Book_Name=$_POST['Book_Name'];
		$Authors_Name =$_POST['Authors_Name'];
		$Catagory =$_POST['Catagory'];
		$Books_Condition=$_POST['Books_Condition'];
		$Details=$_POST['Details'];

		$modifiedBook_Name=StringProcess($Book_Name);

		//$Name =$_POST['Name'];
		//$Email =$_POST['Email'];
		//$Phone=$_POST['Phone'];
		$Location=$_POST['Location'];

		$Name=Session::get("name");
		$Email=Session::get("email");
		$Phone=Session::get("phone");
		$Division=Session::get("location");

		$Price =$_POST['Price'];

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			$file_name = $_FILES['Image']['name'];
		    $file_size = $_FILES['Image']['size'];
		    $file_temp = $_FILES['Image']['tmp_name'];
			
			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;
			$permitted = array('jpg','jpeg','png','gif');

			//echo $file_ext." ".$file_temp;
									

			if (in_array($file_ext, $permitted) === false) {
				Session::set("extension","Invalid Image Format");
			}else{
				move_uploaded_file($file_temp,$uploaded_image);
			}
		}


		$db=new database();

		$query="INSERT INTO advertisement(Book_Name,modifiedBook_Name,Authors_Name,Catagory,Books_Condition,Name,Email,Phone,Location,Division,Details,Price,Image) VALUES
		('$Book_Name','$modifiedBook_Name','$Authors_Name','$Catagory','$Books_Condition','$Name','$Email','$Phone','$Location','$Division','$Details','$Price','$uploaded_image');";

		if(Session::get("extension")=="")
		{
			$result=$db->update($query);
		}

		if($result)
		{
			header("Location:manageadd.php");
			//exit();
			//echo "success";
		}
		else{
			header("Location:postadd.php");
		}

	}

  ?>