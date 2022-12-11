<?php 
	include 'header.php';
	include 'config.php';
	include 'database.php';
 ?>

   <?php 

  	$db1=new database();

  	$perpage=5;

  	$query1="SELECT * FROM advertisement";

  	$read1=$db1->select($query1);

  	$total=mysqli_num_rows($read1);

  	$rowsinpage=ceil($total/$perpage);

  	echo $rowsinpage;

   ?>

   <?php 

   		if(isset($_GET['page'])){
   			$page=$_GET['page'];
   		}
   		else{
   			$page=1;
   		}

   		

   		$start_from=($page-1)*$perpage;

   		//echo $start_from." ".$perpage." ".$page;

    ?>



 <?php 
 	$db=new database();

 	$Division=$_GET['location']; $Catagory=$_GET['catagory'];

 	if($Division){
 		$query="SELECT * FROM advertisement WHERE Division='$Division' limit $start_from,$perpage";
 	}
 	else if($Catagory){
 		$query="SELECT * FROM advertisement WHERE Catagory='$Catagory' limit $start_from,$perpage";
 	}
 	else{
 		$query="SELECT * FROM advertisement limit $start_from,$perpage";
 	}

 	$read=$db->select($query);

  ?>



<style type="text/css">
	.detailsdiv{
			width:50%;
			border-radius: 5px;
			
			font-family: Muli, sans-serif;
			padding-top:10px;
			margin-top:50px;
			margin-bottom: 100px;
			background-color: #E7EDEE;
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
			/*padding-top: 30px;*/
			background-color: #E7EDEE;
			border-radius: 5px;
		}
</style>

<center>
		<div class="detailsdiv">
			<form method="post" action="searchdetails.php">
				<table class="searchtable">
					<tr>
						<td>
							<input type="text" name="search" placeholder="Book Name or Author Name or Category" style="width: 250px; height: 30px;" Required>
						</td>
						<td>
							<input type="submit" name="submit" value="Search" style="width: 70px; height: 30px;">
						</td>
					</tr>
				</table>
			</form>

			<table class="detailstable">
				<?php while($row=$read->fetch_assoc()) { ?>
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
							<!-- Pagination -->

				<?php echo "<span><a href='hudai.php?page=1'>".'First Page '."</a>";

				for($i=1;$i<=$rowsinpage;$i++){
					echo "<a href='hudai.php?page=".$i."'>".$i." "."</a>";
				}

				echo "<a href='hudai.php?page=$rowsinpage'>".'Last Page'."</a></span" ?>
		</div>
	</center>

<?php include 'footer.php';?>