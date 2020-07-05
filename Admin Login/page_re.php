<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">

	<script type="text/javascript">
		function show_P()
		{
			var pass = document.getElementById('pass'); 
			if(document.getElementById('checkP').checked)
			{
				pass.setAttribute('type','text');
			} else 
			{
				pass.setAttribute('type','Password');
			}
		}
	</script>
</head>
<body>
	<!--Main Container-->
	<div class="contain">
		<div class="upper">
			<div id="imC"><img src="CSS\user.png" alt="profile Picture"/></div>
			<div id="upper_L">
			<h2 id="">Create Account</h2>
			<p id="infor">Enter Details on Relavent Areas</p>
			</div>

		</div>

		<div class="mid">
			<!--Registration Form-->
			<form id="formreg" method="post" action="register.php">
				<table>
					<tr>
						<td>Username :</td>
						<td colspan="2"><input type="text" name="uname" placeholder="Enter Your Username"></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="Password" id="pass" name="pass" placeholder="Enter Your Password"></td>
						<td><input type="checkbox" id="checkP" name="checkP" onclick="show_P();">Show Password</td>
					</tr>
					<tr>
						<td>Confirm Password :</td>
						<td><input type="Password" id="Cpass" name="Cpass" placeholder="Confirm Your Password"></td>
						<td></td>
					</tr>
					<tr>
						<td>Email Address :</td>
						<td><input type="text" id="email" name="email" placeholder="Enter Your Email Address"></td>
						<td></td>
					</tr>
					<tr><td></td><td><input type="submit" id="subS" name="rebb" value="Create"></td><td></td></tr>
					<tr><td></td><td>Already Registered ? To <a href="page_lo.php">Login.</a></td><td></td></tr>

				</table>
			</form>
		</div>

	</div>
	<!--Footer-->
	<div class="foot3">
		<div class="navF"></div>
		<div>C Ishan</div>
	</div> 

</body>
</html>