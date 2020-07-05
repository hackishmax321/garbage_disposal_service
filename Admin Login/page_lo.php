<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">

	<script type="text/javascript">
		function show_P()
		{
			//
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
	<div class="contain">
		<div class="upper">
			<div id="imC"><img src="CSS\user.png" alt="profile Picture"/></div>
			<div id="upper_L">
			<h2 id="">Login</h2>
			<p id="infor">Enter Your Username and Password on Relavent Areas</p>
			</div>

		</div>

		<div class="mid">

			<form id="formLog" method="post" action = "login.php">
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
					<tr><td></td><td><input type="submit" id="subS" name="lobb" value="Login"></td><td></td></tr>
					<tr><td></td><td>Need to <a href="page_re.php">create</a> Accounts ?</td><td></td></tr>

				</table>
			</form>
		</div>

	</div>

	<div class="foot3">
		<div class="navF"></div>
		<div>C Ishan</div>
	</div> 

</body>
</html>