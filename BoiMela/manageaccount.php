<?php 
	include 'header.php';
	include 'database.php';
	include 'config.php';
	Session::checkSession();
 ?>

 <?php 
 	$db=new database();

 	$Email=Session::get("email");

 	$query="SELECT * FROM account WHERE Email='$Email'";

 	$read=$db->select($query);

 	$row=$read->fetch_assoc();

 	$msg=Session::get("extension");
 	Session::set("extension","");
  ?>

 <style type="text/css">
 	
 	.manageaccountdiv{
 		background-color: #E7EDEE;
		width:50%;
		border-radius: 5px;
		margin-top: 100px;
		margin-bottom: 100px;
 	}
 	.manageaccounttable{
 		font-size: 15px;
		font-family: Muli, sans-serif;
		border-radius: 5px;
		width:50%;
		padding-left: 30px;
		padding-bottom: 30px;
		padding-top:30px;
 	}
 	.manageaccounttable td{
 		padding-top:10px;
		padding-left: 10px;
 	}

	input{
		height: 25px;
		/*border-radius: 3px;
		border: 2px solid #ddd;*/
	}

	.manageaccountform{
		padding-bottom: 20px;
	}

 </style>

<center>
	<div class="manageaccountdiv">
		<form class="manageaccountform" method="post" action="manageaccountaction.php" enctype="multipart/form-data">
			<table class="manageaccounttable">
				<tr>
					<td><img src="images/man.png" heigth="25" width="25"></td>
					<td><input type="text" name="Name" value="<?php echo $row['Name']; ?>" Required></td>
				</tr>
				<tr>
					<td><img src="images/phone.png" heigth="25" width="25"></td>
					<td><input type="Phone" name="Phone" value="<?php echo $row['Phone']; ?>" Required></td>
				</tr>
				<tr>
					<td><img src="images/password.png" heigth="25" width="25"></td>
					<td><input type="text" name="Password" value="<?php echo $row['Password']; ?>" Required></td>
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

			<input type="submit" name="submit" value="Submit" style="width:60px;">

		</form>
	</div>
</center>

 <?php include 'footer.php' ?>