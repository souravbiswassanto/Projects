<?php 
	include 'header.php';
	Session::checkLogin();
 ?>

 <style type="text/css">
 	.signupdiv{
			background-color: #E7EDEE;
			width:50%;
			border-radius: 5px;
			margin-top: 100px;
			margin-bottom: 100px;
		}
		.signuptable{
			font-size: 15px;
			font-family: Muli, sans-serif;
			border-radius: 5px;
			width:50%;
			padding-left: 30px;
			padding-bottom: 30px;
			padding-top:30px;
		}
		.signuptable td{
			padding-top:10px;
		}
		input{
			height: 25px;
			border-radius: 3px;
		}
		#signupheader{
			padding-top:20px;
			font-family: Muli, sans-serif;
		}
		.signupform{
			padding-bottom: 20px;
		}
 </style>

<center>
	<div class="signupdiv">
		<h3 id="signupheader">Creating Account</h3>
		
		<form class="signupform" method="post" action="signupaction.php">
			<table class="signuptable">
				<tr>
					<td>
						<img src="images/man.png" heigth="25" width="25">
					</td>
					<td>
						<input type="text" name="Name" placeholder="Your Name" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/email.png" heigth="25" width="25">
					</td>
					<td>
						<input type="email" name="Email" placeholder="Your Mail Adress" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/phone.png" heigth="25" width="25">
					</td>
					<td>
						<input type="phone" name="Phone" placeholder="Your Phone Number" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/password.png" heigth="25" width="25">
					</td>
					<td>
						<input type="password" name="Password1" placeholder="Password" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/confirmpassword.png" heigth="25" width="25">
					</td>
					<td>
						<input type="password" name="Password2" placeholder="Confirm Password" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/location.png" heigth="25" width="25">
					</td>
					<td>
						<select name="Division" style="height: 25px; width: 160px; border-radius: 5px;">
						  <option value="">Select Division</option>
						  <option value="Barisal">Barisal</option>
						  <option value="Dhaka">Dhaka</option>
						  <option value="Chattagram">Chattagram</option>
						  <option value="Khulna">Khulna</option>
						  <option value="Mymensingh">Mymensingh</option>
						  <option value="Rajshahi">Rajshahi</option>
						  <option value="Rangpur">Rangpur</option>
						  <option value="Sylhet">Sylhet</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<h4>
						<?php 
							$msg=Session::get("signupmsg");
							Session::set("signupmsg","");
							echo $msg;
						 
						 ?></h4>
					</td>
				</tr>
			</table>

			<input type="submit" name="submit" value="Register" style="width:80px;">
			<br> <br>
			Already Have an Account?
			<a href="login.php">Login</a>

		</form>
		</div>
	</center>

<?php include 'footer.php';?>