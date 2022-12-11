<?php 
	include 'header.php';
	include 'database.php';
	include 'config.php';
	Session::checkSession();
 ?>

 <?php 
 	$db=new database();

 	$I=$_GET['id'];
 	if(Session::get("updateid")){
 		$I=Session::get("updateid");
 	}

 	if($I==""){
 		header("Location:manageadd.php");
 	}

 	$query="SELECT * FROM advertisement WHERE id='$I'";

 	$read=$db->select($query);

 	$row=$read->fetch_assoc();

 	$msg=Session::get("extension");
 	Session::set("extension","");
  ?>

 <style type="text/css">
 	
 	.updateadddiv{
 		background-color: #E7EDEE;
		width:50%;
		border-radius: 5px;
		margin-top: 100px;
		margin-bottom: 100px;
 	}
 	.updateaddtable{
 		font-size: 15px;
		font-family: Muli, sans-serif;
		border-radius: 5px;
		width:50%;
		padding-left: 30px;
		padding-bottom: 30px;
		padding-top:30px;
 	}
 	.updateaddtable td{
 		padding-top:10px;
		padding-left: 10px;
 	}

	input{
		height: 25px;
		border-radius: 3px;
	}

	.updateaddform{
		padding-bottom: 20px;
	}

 </style>

<center>
	<div class="updateadddiv">
		<form class="updateaddform" method="post" action="updateaddaction.php?id=<?php echo $row['id']; ?>" enctype="multipart/form-data">
			<table class="updateaddtable">
				<tr>
					<td><img src="images/Condition.png" heigth="25" width="25"></td>
					<td><input type="text" name="Book_Name" value="<?php echo $row['Book_Name']; ?>" Required></td>
				</tr>
				<tr>
					<td><img src="images/author.png" heigth="25" width="25"></td>
					<td><input type="text" name="Authors_Name" value="<?php echo $row['Authors_Name']; ?>" Required></td>
				</tr>
				<tr>
					<td><img src="images/location.png" heigth="25" width="25"></td>
					<td><input type="text" name="Location" value="<?php echo $row['Location']; ?>" Required></td>
				</tr>
				<tr>
					<td><img src="images/taka.png" heigth="25" width="25"></td>
					<td><input type="text" name="Price" value="<?php echo $row['Price']; ?>" Required></td>
				</tr>
				<tr>
					<td><img src="images/details.png" heigth="25" width="25"></td>
					<td><textarea name="Details" value=""><?php echo $row['Details']; ?></textarea></td>
				</tr>
				<tr>
					<td><img src="images/image.png" heigth="25" width="25"></td>
					<td><input type="file" name="Image"></td>
				</tr>
				<tr>
					<td></td>
					<td><h4><?php echo $msg; ?></h4></td>
				</tr>
			</table>

			<!--<a href="updateaddaction.php?id=<?php echo $row['id']; ?>">Submit</a>-->
			<input type="submit" name="submit" value="Submit" style="width:60px;">

		</form>
	</div>
</center>

 <?php include 'footer.php' ?>