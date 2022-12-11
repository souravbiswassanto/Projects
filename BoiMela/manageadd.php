<?php 
	include 'header.php';
	include 'config.php';
	include 'database.php';
	Session::checkSession();
 ?>

 <?php 
 	$db=new database();

 	$Email=Session::get("email");

 	$query="SELECT * FROM advertisement WHERE Email='$Email'";

 	$read=$db->select($query);

  ?>

<style type="text/css">
	.detailsdiv{
			width:50%;
			border-radius: 5px;
			
			font-family: Muli, sans-serif;
			padding-top:10px;
			margin-top:100px;
			margin-bottom: 100px;
		}
		.detailstable{
			background-color: #E7EDEE;
			width:100%;
			padding-left:20px;
			border-radius: 5px;
			padding-top:20px;
			border-spacing: 10px;
		}
		.detailstable a{
			text-decoration: none;
			color:black;
		}
		.detailstable a:hover{
			color: red;
		}
		
</style>

<center>
		<div class="detailsdiv">
			<table class="detailstable">
				<?php while($row=$read->fetch_assoc()) { ?>
				<tr>
					<td><a href="managedetails.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['Image']; ?>" height="100" width="80"></a></td>
					<td>
						<a href="managedetails.php?id=<?php echo $row['id']; ?>"><h3><?php echo $row['Book_Name']; ?></h3></a>
						<table>
							<tr>
								<td><img src="images/author.png" height="25" width="25"></td>
								<td><?php echo $row['Authors_Name']; ?></td>
							</tr>
							<tr>
								<td><img src="images/condition.png" height="25" width="25"></td>
								<td><?php echo $row['Books_Condition']; ?></td>
							</tr>
							<tr>
								<td><img src="images/taka.png" height="25" width="25"></td>
								<td><?php echo $row['Price']; ?></td>
							</tr>
							
							<!-- <tr>
								<td id="operation">
									<a href="updateadd.php?id=<?php echo $row['id']; ?>">Update</a>
								</td>
								<td id="operation">
									<a href="deleteadd.php?id=<?php echo $row['id']; ?>">Delete</a>
								</td>
							</tr> -->
						</table>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</center>

<?php include 'footer.php';?>