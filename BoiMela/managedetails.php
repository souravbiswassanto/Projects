<?php 

	include 'header.php';
	include 'config.php';
	include 'database.php';
	Session::checkSession();
 ?>

<?php 
	$id=$_GET['id'];

	$db=new database();

	$query="SELECT * FROM advertisement WHERE id='$id'";

 	$read=$db->select($query);

 	if(!$read){
 		header("Location:manageadd.php");
 	}

 	$row=$read->fetch_assoc();
 ?>

	<style type="text/css">
		*{
				margin: 0;
				padding: 0;
		}
		.detailsdiv{
			width:50%;
			border-radius: 5px;
			height:650px;
			font-family: Muli, sans-serif;
			padding-top:10px;
			margin-top:100px;
		}
		.detailstable{
			background-color: #E7EDEE;
			width:100%;
			padding-left:20px;
			border-radius: 5px;
			padding-top:20px;
			border-spacing: 10px;
		}
		#operation{
			padding-top:10px;
		}
		#operation a{
			border:1px solid #007168;
			border-radius: 25px;
			padding-top:3px;
			padding-bottom: 3px;
			padding-left: 10px;
			padding-right: 10px;
			font-size: 16px;
			text-decoration: none;
		}
		#operation a:hover{
			border:1px solid white;
		}
		
	</style>
	<center>
			<div class="detailsdiv">
				<table class="detailstable">
					<tr>
						<td>
							<?php 

								$Name=$row['Image'];

								if(!$Name){
									header("Location:manageadd.php");
								}

								$info=getimagesize($Name);
			
								$height=$info[0];
								$width=$info[1];

								//echo $height." ".$width." ";
								$newheight=200;
								$newwidth=($height*$newheight)/$width;
							 ?>
							<img src="<?php echo $row['Image']; ?>" height="<?php echo $newheight; ?>" width="<?php echo $newwidth; ?>">
						</td>
						<td>
							<h3><?php echo $row['Book_Name']; ?></h3>
							<table>
								<tr>
									<td><img src="images/author.png" height="25" width="25"></td>
									<td><?php echo $row['Authors_Name']; ?></td>
								</tr>
								<tr>
									<td><img src="images/catagory.png" height="25" width="25"></td>
									<td><?php echo $row['Catagory']; ?></td>
								</tr>
								<tr>
									<td><img src="images/Condition.png" height="25" width="25"></td>
									<td><?php echo $row['Books_Condition']; ?></td>
								</tr>
								<tr>
									<td><img src="images/man.png" height="25" width="25"></td>
									<td><?php echo $row['Name']; ?></td>
								</tr>
								<tr>
									<td><img src="images/location.png" height="25" width="25"></td>
									<td><?php echo $row['Location']; ?></td>
								</tr>
								<tr>
									<td><img src="images/taka.png" height="25" width="25"></td>
									<td><?php echo $row['Price']; ?></td>
								</tr>
							</table>

							<h3 style="margin-top:30px;">Contact</h3>
							<table>
								<tr>
									<td><img src="images/phone.png" height="25" width="25"></td>
									<td><?php echo $row['Phone']; ?></td>
								</tr>
								<tr>
									<td><img src="images/email.png" height="25" width="25"></td>
									<td><?php echo $row['Email']; ?></td>
								</tr>
								<tr>
									<td id="operation">
										<a href="updateadd.php?id=<?php echo $row['id']; ?>">Update</a>
									</td>
									<td id="operation">
										<a href="deleteadd.php?id=<?php echo $row['id']; ?>">Delete</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table class="detailstable">
					<tr>
						<td><h3>Details</h3></td>
					</tr>
					<tr>
						<td style="text-align: justify;"><?php echo $row['Details']; ?></td>
					</tr>
				</table>
			</div>
		</center>

<?php 

	include 'footer.php';
 ?>