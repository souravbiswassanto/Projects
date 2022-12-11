<?php 
	include 'header.php';
 ?>

<?php 
	//Session::checkSession();
 ?>

 <style type="text/css">
		.indexdiv{
			width:80%;
			background-color: #E7EDEE;
			border-radius: 5px;
			font-family: Muli, sans-serif;
			margin-top: 40px;
			margin-bottom: 50px;
			padding-bottom: 30px;
		}

		.indextable{
			padding:20px;
		}
		.citiesp{
					    
		    text-align: center;
    		border-radius: 40px;
    		padding: 5px;
		}

		.catagories{
			text-align: center;
			border-radius: 40px;
			padding:5px;
			padding-right: 58px;
		}

		.trcities{}
		.linkcities{
			text-decoration: none;
		}
		.tablespace{

		}
		.logo{
			height:65px;
			width: 65px;
			border-radius: 35px;
		}
		
	</style>
	
	<center>
		<body>
		<div class="indexdiv" style="margin-top: 110px;">
			<table class="indextable">
				<tr>
					<td>
						<h3>Welcome to Boimela.com</h3>
						<p style="margin-bottom: 15px;">Buy and sell books in Bangladesh.</p>
					</td>
				</tr>
			</table>
			<h2 style="margin-bottom: 7px;color=""><u>Divisions</u></h2>
						<table class="cities">
							
							<tr class="trcities"><td class="citiesp"><a href="details.php?location=Barisal" class="linkcities">Barisal</a></td></tr>
							<tr class="trcities"><td class="citiesp"><a class="linkcities" href="details.php?location=Chattogram">Chattogram</a></td></tr>
							<tr class="trcities"><td class="citiesp"><a class="linkcities" href="details.php?location=Dhaka">Dhaka</a></td></tr>
							<tr class="trcities"><td class="citiesp"><a class="linkcities" href="details.php?location=Khulna">Khulna</a></td></tr>
							<tr class="trcities"><td class="citiesp"><a href="details.php?location=Mymensingh" class="linkcities">Mymensingh</a></td></tr>
							<tr class="trcities"><td class="citiesp"><a href="details.php?location=Rajshahi" class="linkcities">Rajshahi</a></td></tr>
							<tr class="trcities"><td class="citiesp"><a href="details.php?location=Rangpur" class="linkcities">Rangpur</a></td></tr>
							<tr class="trcities"><td class="citiesp"><a href="details.php?location=Sylhet" class="linkcities">Sylhet</a></td></tr>
						</table>

		</div>

		<div class="indexdiv">
			<h2 style="padding-top: 30px;">Catagories</h2>
			<table class="indextable">
				<tr>
					<td class="catagories">
						<a href="details.php?catagory=Agriculture" class="linkcities"><img src="images/agriculture.png" class="logo"></a>
					</td>
					<td class="catagories" >
						<a href="details.php?catagory=Arts" class="linkcities"><img src="images/arts_logo.png" class="logo"></a>
					</td>
					<td class="catagories" >
						<a href="details.php?catagory=Business Studies" class="linkcities"><img src="images/bs_logo.png" class="logo"></a>
					</td>
					<td class="catagories">
						<a href="details.php?catagory=Engineering" class="linkcities"><img src="images/engineering_logo.png" class="logo"></a>
					</td>
				</tr>
				<tr>
					<td class="catagories">
						<a href="details.php?catagory=Agriculture" class="linkcities">Agriculture</a>
					</td>
					<td class="catagories" >
						<a href="details.php?catagory=Arts" class="linkcities">Arts</a>
					</td>
					<td class="catagories">
						<a href="details.php?catagory=Business Studies" class="linkcities">Business Studies</a>
					</td>
					<td class="catagories">
						<a href="details.php?catagory=Engineering" class="linkcities">Engineering</a>
					</td>
				</tr>
				<tr>
					<td class="catagories">
						<a href="details.php?catagory=Mathematics" class="linkcities"><img src="images/mathematics_logo.png" class="logo"></a>
					</td>
					<td class="catagories">
						<a href="details.php?catagory=Law" class="linkcities"><img src="images/law_logo.png" class="logo"></a>
					</td>
					<td class="catagories">
						<a href="details.php?catagory=Medical Science" class="linkcities"><img src="images/medical.png" class="logo"></a>
					</td>
					<td class="catagories">
						
						<a href="details.php?catagory=Veterinary" class="linkcities"><img src="images/veterinary_logo.png" class="logo"></a>
					</td>
				</tr>

				<tr>
					<td class="catagories">
						<a href="details.php?catagory=Mathematics" class="linkcities">Mathematics</a>
					</td>
					<td class="catagories">
						<a href="details.php?catagory=Law" class="linkcities">Law</a>
					</td>
					<td class="catagories">
						<a href="details.php?catagory=Medical Science" class="linkcities">Medical Science</a>
					</td>
					<td class="catagories">
						
						<a href="details.php?catagory=Veterinary" class="linkcities">Veterinary</a>
					</td>
				</tr>

				<tr>
					<td class="catagories">
						
						<a href="details.php?catagory=Job Preparation" class="linkcities"><img src="images/job.png" class="logo"></a>
					</td>
					<td class="catagories">
						
						<a href="details.php?catagory=Other" class="linkcities"><img src="images/other.png" class="logo"></a>
					</td>
					
				</tr>

				<tr>
					<td class="catagories">
						
						<a href="details.php?catagory=Job Preparation" class="linkcities">Job Preparation</a>
					</td>
					<td class="catagories">
						
						<a href="details.php?catagory=Other" class="linkcities">Other</a>
					</td>
				</tr>
			</table>
		</div>
	
</body>
</center>


<?php include 'footer.php';?>