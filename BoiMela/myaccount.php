<?php 
	include 'header.php';
	include 'config.php';
	include 'database.php';
	Session::checkSession();
 ?>

 <?php 
 	$db=new database();

 	$Email=Session::get("email");

 	$query="SELECT * FROM account WHERE Email='$Email'";

 	$read=$db->select($query);

 	$row=$read->fetch_assoc();
  ?>

<style type="text/css">
	.accounttable{
			font-size: 15px;
			font-family: Muli, sans-serif;
			border-radius: 5px;
			width:100%;
			padding-left: 30px;
			padding-bottom: 30px;
			padding-top:10px;

		}
		.accounttable td{
			padding-left:10px;
		}
		.accountdiv{
			background-color: #E7EDEE;
			width:50%;
			border-radius: 5px;
			margin-top:150px;
			margin-bottom: 150px;
		}
		#accountheader{
			padding-top:20px;
			font-family: Muli, sans-serif;
		}
		.accounttable2{
			font-size: 15px;
			font-family: Muli, sans-serif;
			border-radius: 5px;
			padding-bottom: 30px;
		}
		.accounttable2 a{
			border:1px solid #007168;
			border-radius: 25px;
			padding-top:3px;
			padding-bottom: 3px;
			padding-left: 10px;
			padding-right: 10px;
			font-size: 16px;
			text-decoration: none;
			color:black;
		}
		.accounttable2 a:hover{
			border:1px solid white;
		}
</style>
<center>
		<div class="accountdiv">
			<h3 id="accountheader">MY Account</h3>
			<table class="accounttable">
				<tr>
					<td>
						<?php if($row['Image']){ 
								$Name=$row['Image'];
								$info=getimagesize($Name);
			
								$height=$info[0];
								$width=$info[1];

								//echo $height." ".$width." ";
								$newheight=150;
								$newwidth=($height*$newheight)/$width;

							?>
							<img src="<?php echo $row['Image']; ?>" height="<?php echo $newheight; ?>" width="<?php echo $newwidth; ?>" style="border-radius: 8px;">
						<?php } else { ?>
						<img src="images/man.png" height="180" width="180" style="border-radius: 8px;">
					<?php } ?>
					</td>
					<td>
						<table>
							<tr>
								<td><img src="images/man.png" height="25" width="25"></td>
								<td><?php echo $row['Name']; ?></td>
							</tr>
							<tr>
								<td><img src="images/phone.png" height="25" width="25"></td>
								<td><?php echo $row['Phone']; ?></td>
							</tr>
							<tr>
								<td><img src="images/email.png" height="25" width="25"></td>
								<td><?php echo $row['Email']; ?></td>
							</tr>
							<tr>
								<td><img src="images/location.png" height="25" width="25"></td>
								<td><?php echo $row['Division']; ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>

			<table class="accounttable2">
				<tr>
					<td><a href="manageadd.php">Manage My Adds</a></td>
					<td><a href="manageaccount.php">Edit Profile</a></td>
				</tr>
			</table>
		</div>
	</center>

<?php include 'footer.php';?>