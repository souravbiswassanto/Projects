<?php 
	include 'header.php';
	//include 'loginaction.php';
	Session::checkLogin();
 ?>

<style type="text/css">
	.logindiv{
			background-color: #E7EDEE;
			width:50%;
			border-radius: 5px;
			margin-top: 100px;
			margin-bottom: 100px;
		}
		.logintable{
			
			font-size: 15px;
			font-family: Muli, sans-serif;
			border-radius: 5px;
			width:50%;
			padding-left: 30px;
			padding-bottom: 30px;
			padding-top:30px;
		}
		.logintable td{
			padding-top:10px;
		}
		input{
			height: 25px;
			border-radius: 3px;
		}
		#loginheader{
			padding-top:20px;
			font-family: Muli, sans-serif;
		}
		.loginform{
			padding-bottom: 20px;
		}

</style>
<center>
	<div class="logindiv">
		<h3 id="loginheader">Member Login</h3>

		<form class="loginform" method="post" action="loginaction.php">
			<table class="logintable">
				<!-- <tr>
					<td></td>
					<td>
						<?php 
							$X=Session::get("postaddmsg");

							echo $X;
						 ?>
					</td>
				</tr> -->
				<tr> 
					<td>
						<img src="images/email.png" height="25" width="25">
					</td>
					<td>
						<input type="Email" name="Email" placeholder="Enter Your Email" Required>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/password.png" heigth="25" width="25">
					</td>
					<td>
						<input type="password" name="Password" placeholder="Your password" Required>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><h4>
						<?php 
							$msg=Session::get("msg");
							Session::set("msg","");
							echo $msg;
						 
						 ?></h4>
					</td>
				</tr>
			</table>

			<input type="submit" name="submit" value="Login" style="width:60px;">

			<br><br>
			Not have an Account? 
			<a href="signup.php">Register</a>

		</form>
		</div>
	</center>

<?php include 'footer.php';?>