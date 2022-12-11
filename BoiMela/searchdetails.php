<?php 
	include 'header.php';
	include 'config.php';
	include 'database.php';
	include 'StringCompare.php';
 ?>

 <?php 
 	$db=new database();

 	$search=$_POST['search'];

 	$search=StringProcess($search);

 	if(!$search){
 		header("Location:details.php");
 	}

 	$query="SELECT * FROM advertisement";

 	$read=$db->select($query);

  ?>

<style type="text/css">
	.detailsdiv{
			width:50%;
			border-radius: 5px;
			background-color: #E7EDEE;
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
		.searchtable{
			background-color: #E7EDEE;
			border-radius: 5px;
		}
</style>

<center>
		<div class="detailsdiv">

			<table class="searchtable">
				<tr>
					<td>
						<h4>Search Results</h4>
					</td>
				</tr>
			</table>

			<table class="detailstable">
				<?php while($row=$read->fetch_assoc()) { 
					$N=$row['modifiedBook_Name'];
					$A=$row['Authors_Name'];
					$C=$row['Catagory'];

					$X=StringMatching($N,$search);
					$Y=StringMatching($A,$search);
					$Z=StringMatching($C,$search);

					if(!$X && !$Y && !$Z){
						continue;
					}

					?>
				<tr>
					<td><a href="showdetails.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['Image']; ?>" height="110" width="100"></a></td>
					<td>
						<a href="showdetails.php?id=<?php echo $row['id']; ?>"><h3><?php echo $row['Book_Name']; ?></h3></a>
						<table>
							<tr>
								<td><img src="images/location.png" height="25" width="25"></td>
								<td><?php echo $row['Location']; ?></td>
							</tr>
							<tr>
								<td><img src="images/taka.png" height="25" width="25"></td>
								<td><?php echo $row['Price']; ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</center>

<?php include 'footer.php';?>