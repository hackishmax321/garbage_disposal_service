<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Pacifico" rel="stylesheet">
	<title>Login | Eoc Friends</title>
	<link rel="stylesheet" type="text/css" href="css/style-log.css">

	<script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
</head>
<body>
	<div class="bg">
	</div>
    <div class="login-box">
     <img src="user.png" class="user">

	    <h1>LOGIN</h1>
	    <center>
	    <form id="spec" action="php/login.php" method="POST">

	    	<table>

	    		<tr><td class="left"><ion-icon name="contact"></ion-icon></td><td class="right"><input type="text" name="username" placeholder="Username"></td></tr>
	    		<tr><td class="left"><ion-icon name="square"></ion-icon></td><td class="right"><input type="password" name="password" placeholder="Password"></td></tr>

	    		<tr><td id="btntd"></td><td id="btntd">
	    			<div id=btnhan>
						<button id="test-btn" name="lobb" onclick="">Login</button>
					</div>
	    		</td></tr>

	    	</table>
	    	<div id="final">
	    		<p>Haven't Registered yet? Then <a href="registation.php">Register Here.</a></p>
	    	</div>





	    </form>
	    </center>

   </div>

</body>
</html>
