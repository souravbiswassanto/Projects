<?php 

	include 'header.php';
	include 'config.php';
	include 'database.php';
 ?>

<?php 
	$id=$_GET['id'];

	$db=new database();

	$query="SELECT * FROM advertisement WHERE id='$id'";

 	$read=$db->select($query);

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
			height:700px;
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
		
	</style>
	<center>
			<div class="detailsdiv">
				<table class="detailstable">
					<tr>
						<td>
							<?php 

								$Name=$row['Image'];
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
									<td><img src="images/location.png" height="25" width="25"></td>
									<td><?php echo $row['Division']; ?></td>
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