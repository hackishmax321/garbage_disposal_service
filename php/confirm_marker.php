<?php
	header("Location:http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/map-gcap.php");

	$error = "";
	
	if(isset($_POST['submit2'])){
				
                $confirm = 0;
                $locID = $_POST['ID'];

                                    

                $con = new mysqli("localhost","root","", "geo_locator");

                                    //if($loc == )
                if($con->connect_error){
                    die("Connection Failed");
                    }
                	
                    $error = "Connection Successful";

                  	$query4 = "UPDATE `user_passedgeo` SET `isConfimed`= 1 WHERE locationID = $locID";

                  	$update_query = mysqli_query($con, $query4);
                  	

                  	if($update_query){
                  		if(mysqli_affected_rows($con)>0){
                  			//redirect("map-admin.php");
                  			$error = "Confirmation Completed!";

                  		} else {
                  			$error = "Confirmation Failded!";
                  		}
                  	}
                  	/*
                    if ($con->query($query1) === TRUE) {
                    	echo "Hii";
                        $error = "New record created successfully";
                    } else {
                        $error = "Error: " . $query1 . "<br>" . $con->error;

                    } */

                } 

                if(isset($_POST['dec'])) {

                	
	                $locID = $_POST['ID'];

	                          

	                $con = new mysqli("localhost","root","", "geo_locator");

	                                    //if($loc == )
	                if($con->connect_error){
	                    die("Connection Failed");
	                    }
	                	
	                    $error = "Connection Successful";

	                  	$query4 = "DELETE FROM `user_passedgeo` WHERE locationID = $locID";

	                  	$update_query = mysqli_query($con, $query4);
	                  	

	                  	if($update_query){
	                  		if(mysqli_affected_rows($con)>0){
	                  			//redirect("map-admin.php");
	                  			$error = "Deletion Completed!";

	                  		} else {
	                  			$error = "Deletion Failded!";
	                  		}
	                  	}
                }

?>