<?php


	
	$error = "";
		function pass_com(){
			
			$con = new mysqli("localhost","root","","geo_locator");

			if($con->connect_error){
			    die("Connection Failed");
			  }
			  
			  $sqldata = mysqli_query($con,"select username, comment from user_comments");

			    $rows = array();
			    while($r = mysqli_fetch_assoc($sqldata)) {
			        $rows[] = $r;

			    }
			  $indexed = array_map('array_values', $rows);
			  //  $array = array_filter($indexed);

			    echo json_encode($indexed);
			    if (!$rows) {
			        return null;
			    }

	
		}

		function array_flatten($array) {
		    if (!is_array($array)) {
		        return FALSE;
		    }
		    $result = array();
		    foreach ($array as $key => $value) {
		        if (is_array($value)) {
		            $result = array_merge($result, array_flatten($value));
		        }
		        else {
		            $result[$key] = $value;
		        }
		    }
		    return $result;
		}


?>