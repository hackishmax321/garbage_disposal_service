<?php 
$username=$_POST['user'];

$password=$_POST['pass'];


$username=stripcslashes($username);
$password=stripcslashes($password);

$conn=mysqli_connect("localhost","root","","geo_locator");
$Query="select * from users where username='$username' and password='$password'";
$result=mysqli_query($conn,$Query) or die("failed to query database".mysql_error());

$row=mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password) {
	header('Location: http://localhost:82/assignment-WEB/Phase%2002/');

}else{
	echo "failed to login";
}




 ?>