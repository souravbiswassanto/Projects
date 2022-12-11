<?php 
	include 'header.php';
	Session::checkSession();
 ?>

 <?php 
 	$msg=Session::get("extension");
 	Session::set("extension","");
  ?>

 <style type="text/css">
 	
 	.addpostdiv{
			background-color: #E7EDEE;
			width:50%;
			border-radius: 5px;
			margin-top: 100px;
			margin-bottom: 100px;
		}
		.addposttable{
			font-size: 15px;
			font-family: Muli, sans-serif;
			border-radius: 5px;
			width:50%;
			padding-left: 30px;
			padding-bottom: 30px;
			padding-top:30px;
		}
		.addposttable td{
			padding-top:10px;
			padding-left: 10px;
		}
		input{
			height: 25px;
			border-radius: 3px;
		}
		#addpostheader{
			padding-top:20px;
			font-family: Muli, sans-serif;
		}
		.addpostform{
			padding-bottom: 20px;
		}
 </style>

<center>
	<div class="addpostdiv">
		<h3 id="addpostheader">Free Posting Add</h3>

		<form class="addpostform" method="post" action="postaddaction.php" enctype="multipart/form-data">

			<table class="addposttable">
				<tr>
					<td>
						<img src="images/book.png" heigth="25" width="25">
					</td>
					<td>
						<input type="text" name="Book_Name" placeholder="Book Name" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/author.png" heigth="25" width="25">
					</td>
					<td>
						<input type="text" name="Authors_Name" placeholder="Author's Name" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/catagory.png" heigth="25" width="25">
					</td>
					<td>
						<select name="Catagory" style="height: 25px; width: 158px; border-radius: 5px;">
						  <option value="">Select Category</option>
						  <option value="Agriculture">Agriculture</option>
						  <option value="Arts">Arts</option>
						  <option value="Business Studies">Business Studies</option>
						  <option value="Engineering">Engineering</option>
						  <option value="Mathematics">Mathematics</option>
						  <option value="Law">Law</option>
						  <option value="Medical Science">Medical Science</option>
						  <option value="Veterinary">Veterinary</option>
						  <option value="Job Preparation">Job Preparation</option>
						  <option value="Other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="Books_Condition" value="Used" checked> Used 
  						<input type="radio" name="Books_Condition" value="New"> New
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/location.png" heigth="25" width="25">
					</td>
					<td>
						<input type="text" name="Location" placeholder="Your Location" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/taka.png" heigth="25" width="25">
					</td>
					<td>
						<input type="text" name="Price" placeholder="Price" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/details.png" heigth="25" width="25">
					</td>
					<td>
						<textarea name="Details"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/image.png" heigth="25" width="25">
					</td>
					<td>
						<input type="file" name="Image" Required>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><h4><?php echo $msg; $msg=""; ?></h4></td>
				</tr>
			</table>

			<input type="submit" name="submit" value="PostAdd" style="width:60px;">

		</form>
		</div>
	</center>

<?php include 'footer.php';?>