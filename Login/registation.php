<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Pacifico" rel="stylesheet">
	<title>Registration | Eoc Friends</title>
	<link rel="stylesheet" type="text/css" href="css/style-log.css">

	<script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
	<script type="text/javascript">
		function Validate()
        {
         form=document.forms["reg"];	
     
        username=form["username"].value;
        
        if(username==""){
                alert('Please enter username');
        
                return false;
        }
       
        email= form['email'].value;
        
        if(email==""){
        alert("Please Give an Email");
        return false;
        }
        if(email.indexOf('@')<0||email.indexOf(".com")<0){
        
        alert('Incorrect Email address,enter valid email address');
        return false;
        }
        password= form['passwordl'].value;
        cpassword= form['cpassword'].value;
        if(password==""){
        alert("Please Give an password");
        return false;
        }
         if(password!=cpassword){
        alert("Passwords Dont Match");
        return false;
        }
        


        
        return true;
        }
	</script>
</head>
<body>
	<div class="bg">
	</div>
    <div class="login-box">
     <img src="user.png" class="user"> 	

	    <h1>REGISTRATION </h1><center>
	    	
	    
	    <form name="reg" action="php/register.php" method="POST" onsubmit="return Validate()">

	    	<table>
	    		
	    		<tr><td class="left"><ion-icon name="contact"></ion-icon></td><td class="right"><input type="text" name="username" placeholder="Username"></td></tr>
	    		<tr><td class="left"><ion-icon name="mail"></ion-icon></td><td class="right"><input type="text" name="email" placeholder="E-mail"></td></tr>
	    		<tr><td class="left"><ion-icon name="square"></ion-icon></td><td class="right"><input type="password" name="passwordl" placeholder="Password"></td></tr>
	    		<tr><td class="left"><ion-icon name="checkbox"></ion-icon></td><td class="right"><input type="password" name="cpassword" placeholder="Confirm Password"></td></tr>
	    		<tr><td id="btntd"></td><td id="btntd">
	    			<div id=btnhan>
						<button id="test-btn" name="rebb">Submit</button>
					</div>
	    		</td></tr>

	    	</table>
	    	<div id="final">
	    		<p>Already have an Account? Then <a href="login.php">Login Here.</a></p>
	    	</div>
	    </form>
	    </center>
            
            
            
         

	    </form>
	 
   </div>
 
</body>
</html> 