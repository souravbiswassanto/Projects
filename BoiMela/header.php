<?php 
	include 'session.php';
	Session::init();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			.header{
			box-shadow: 1px 0px 2px 1px #247ba0;
		    background-color: #247BA0;
		    height: 70px;
		    position: fixed;
		    top: 0;
		    width: 100%;
		    z-index: 99999;
		    padding-left: 20px;
			}
			.header a{
			    color: white;
			    margin-left: 4px;
			    text-decoration: none;
			}
			#navigation a{
				border:1px solid #007168;
				border-radius: 25px;
				padding-top:3px;
				padding-bottom: 3px;
				padding-left: 10px;
				padding-right: 10px;
				font-size: 16px;
			}
			#navigation a:hover{
				border:1px solid white;
			}
			.logo_inside_header{
				padding-left: 40px;
				width : 50%;
			}
		</style>

		<meta charset="utf-8">

		<title>BoiMela.com</title>
	</head>

<?php 
	if(isset($_GET['action']) && $_GET['action']=="logout"){
		Session::destroy();
	}
 ?>
	<body>
		<table class="header">
			<tr>
				<td class="logo_inside_header">
					<a href="index.php"><img src="images/logo.png" height="60" width="100"></a>
				</td>
				<td>
					<table>
						<tr>
							<td id="navigation"><a href="details.php">Buy Book</a></td>
							<td id="navigation"><a href="postadd.php">Sell Book</a></td>
						</tr>
					</table>
				</td>

				<?php 
						$id=Session::get("id");
						$userlogin=Session::get("login");
						if($userlogin){
				?>
				<td id="navigation"><a href="?action=logout">Logout</a></td>
				<!--<td style="width:10%; font-size: 20px;"><a href="?action=logout">Logout</a></td>
				<td style="width:10%; font-size: 20px;"><a href="myaccount.php">Profile</a></td>-->
				<td id="navigation"><a href="myaccount.php">Profile</a></td>
			<?php } else {?>

			

				<!--<td style="width:10%; font-size: 20px;"><a href="signup.php">Register</a></td>
				<td style="width:10%; font-size: 20px;"><a href="login.php">Login</a></td>-->
				<td id="navigation"><a href="signup.php">Register</a></td>
				<td id="navigation"><a href="login.php">Login</a></td>

				<?php } ?>

			</tr>
		</table>