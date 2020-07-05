<?php 
	$_SESSION['uname'] = 0;
	include_once 'php/getmarker.php';
	$error = "";
	session_start();

	if(isset($_SESSION['uname'])){
			$url=null;
			switch ($_SESSION['level']) {
				case 4:
					$url ="map-admin.php";
					break;
				case 3:
					$url ="map-gcap.php";
					break;
				case 2:
					$url ="map-gco.php";
					break;
				case 1:
					$url ="map-users.php";
					break;
				default:
					$url = "map-visit.php";
					break;
			}

		}
	
	if(isset($_SESSION['timeEla'])){
		if((time() - $_SESSION['timeEla'])>=1200){
			$_SESSION = array();
			session_destroy();
		}
	}


	if(isset($_GET['logout'])){
		$_SESSION = array();
		session_destroy();
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME| Garbage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style-main.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans|Open+Sans+Condensed:300|Raleway|ZCOOL+XiaoWei" rel="stylesheet">
	<script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
	<style type="text/css">
		#map {
			height: 100%;
			width:100%;
			padding: 0px;
			


		}

		small {
			font-size: 15px;
			color:#00f8;
		}

		form table tr td {
			height: 50px;
		}

		nav a {
			color: white;
		}

		#brandN {
			font-weight: bolder;
			
		}

		#logright{
			position: absolute;
			top:58px;
			color: white;
			right:40px;
		}

		span ion-icon {
			color: ‎#455666;
			font-size: 50px;
		}

		#pop1 {
			
			position: absolute;
			top: 300%;
			left:30%;
			height: 200px;
			width:40%;
			background-color: black;
			color: white;
			opacity: 0.8s;
			box-shadow: 0 0 20px gray;
			border-radius: 5px;
			text-align: center;
			z-index: 9999;
			display: none;

		} 

		#pop1 span {
			color: ‎white;
		}

		#btn2 {
			padding: 10px 40px;
		}

	</style>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
	<!--Navigation Bar-->
	<nav class="navBar  " style="position: relative;">
		<a href="home.php" class="navbar-brand" id="brandN"><img src="Icon/Web-site Logo V4.png" height=80 alt="slEcoFriends"/></a>

		<div class="navA">
			<ul class="navbar-nav">

				<li class="nav-item">
					<a href=<?php if(isset($_SESSION['uname'])){echo $url;} else echo "map-visit.php" ;?> class="nav-link">Map</a>
				</li>

				<li class="nav-item">
					<a href="programs.php" class="nav-link">Programs</a>
				</li>

				<li class="nav-item">
					<a href="article 1.php" class="nav-link">Articles</a>
				</li>

				<li class="nav-item">
					<a href="contactUs.php" class="nav-link">Contact Us</a>
				</li>

				<li class="nav-item">
					<a href="aboutUs.php" class="nav-link">About Us</a>
				</li>
			</ul>
		</div>
		<div id="login"><a href="Login/login.php"><ion-icon name="contacts"></ion-icon> -- <?php if(isset($_SESSION['uname'])){
			echo "{$_SESSION['uname']}";} else echo 'Login Here';?></a></div><a id ="logright" name="logout" href="home.php?logout=1">LOGOUT</a> 
		</div>
	</nav>

	


	<!--Which use to contain Google Map-->
	<div clss="container" id="main">
		<div id="wallpaper">
			<iframe src="slider/slideshow.html" id="slide" scrolling="no">
				
			</iframe>
			<!--<div id="anime"></div>-->
			<div id="wall">
				<h1 id="header">Welcome to <strong>eco Friends</strong></h1>
				<p id="font2">Eco Friends is a non propitable Organization which associcated with COM (Colombo Municipal Council). This Exercise is to get each and every individual's participation to our own Responsibility. To save the Nature... Make the world better... Save this Earth to Unborn Generations... Your participation for tasks such as poin it out and guide us to strongly polluted locations and join Us buy contacting us to clean up polluted locations are strongly Appriciated. Join with Us and make a Better World. </p>
				
			</div>
			<div id="btn-set">
				<a href="#map-contain">GET STARTED</a>
			</div>

				
		</div>
		<div id="vision">
			<div id="title"><h1 id="header2">Our Vision</h1>
				<p id="font2">For too long, the relationship between prosperity and environment has been seen as a trade-off. Tackling pollution was considered an unwelcome cost on industry and a handicap to economic growth. Our vision is to act Imediate as we can. Cause of that our vision is to,</p><br><br>
				<dl id="font2">
					<li>Provide better Environment to Live</li> 
					<li>Make vibe about "Nececity of saving nature and go-eco concept"amoung community.</li>
				</dl><br><br>
				<p id="font2">And finally make a Better world for Us.</p>
			</div>
		</div>
		<div id="mission">
			<div id="title">
				<h1 id="header2">Our Mission</h1>
				<p id="font2">The mission of Eco Friends is to respond to the combined challenges of pollution and environmental degradation to ensure a sustainable and secure future. We seek solutions through individuals participation, our involvement and your Support. To achieve this mission we should,</p><br><br>
				<dl id="font2">
					<li>Try to get support from Youth Generation to fulfill Tasks</li> 
					<li>Contribute to the cleaning process of polluted locations and prevent further hapenning</li>
					<li>Provide assistance to ones who like to work with Us.</li>
					<li>Promote our ideas in order make a community who supports Us.</li>
				</dl><br><br>
				<p id="font2">Eco Friends community will focus its activities on this critical nexus in the quest for a just, secure and sustainable future for humanity.</p>
			</div></div>
		<div id="map-contain">
		<div id="map" onclick="pop()" ><!--[I can also used Embeded Google map insted of using Google Map API]
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53301.08257643056!2d80.00373415131456!3d6.814587093868555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1540740208220" width="100%" height="450" frameborder="0" style="border:0 background-color: blue" allowfullscreen></iframe>-->
		</div>
		<div id="pop1">
			<span><ion-icon id-"b1" name="remove-circle-outline"></ion-icon></span>
			<h2>Please Login before Support Us.</h2>
			<p>Click OK...</p>
			<button id="btn2" class="btn btn-lg btn-danger" onclick="location.href='http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/Login/login.php'">OK</button>
			<button id="btn3" class="btn btn-lg btn-warning" onclick="pop()">CANCEL</button>
		</div>

		<script type="text/javascript">
			var Y = 0;
			function pop(){
				if(Y==0){
					document.getElementById('pop1').style.display = "block";
					Y=1;
				}else {
					document.getElementById('pop1').style.display = "none";
					Y=0;
				}
						
			}
		</script>

		</div>
		
		<!--Content-->

		<div class="markq">

			<marquee>**** click your location using google map & please upload an image !. ****   **** click your location using google map & please upload an image !. ****   **** click your location using google map & please upload an image !. ****  **** click your location using google map & please upload an image !. ****  **** click your location using google map & please upload an image !. ****</marquee>
			
		</div>

		<footer class="foot">
			<div class="footer">
				
				<center><p id="para">copyright:2018 All right reserved | @NSBM<br>|<a href="Admin Login/page_lo.php"><?php if((isset($_SESSION['uname']))&&($_SESSION['level']==4)){ echo "Admin Login";} ?></a> | <a href="">Instructiona and Policies</a> | <a href="constructionSite.html">RSS</a> | <a href="Blog/contact_us.html">Blog</a>|</p></center>

			</div>
		</footer>

		<div class="all">

			<div id="warn">
				<div class="imageDust">
		
					<img src="resy.png" height="220px">

						</div>

						<div id="resy">
							
							<h4>Please follow these steps!</h4>
							<li>
								click your location using google map.

							</li>
							<li>
								take a snapshot and upload a picture .
							</li>
							<li>
								if you like to give some advice please fill our form and submit ...
							</li>
						</div>

			 </div>
			
		
		<div class="form">
		<div align="center">
			<form>
				<table>
					<tr><td><label>Full Name :</label></td><td width="500px"><input type="text" class="form-control"name="txtfn" placeholder="Full Name" ></td></tr>
					<tr><td><label>Email :</label></td><td><input type="text" class="form-control"name="txtem" placeholder="Email"></td><td></td></tr>
					<tr><td><label>Message :</label></td><td><textarea class="form-control"name="txtem" placeholder="Add Message"></textarea> </td></tr>
					<tr><td></td><td><button class="btn btn-success">SUBMIT</button></td></tr>
					
				</table>
			</form>
		</div>


		</div>
		





</div>

</div>


	

	<script>

		function myMap() {

			//------------------[Initialize a Map]----------------------------------------//

			//give some coords. as variable
			var myLoc = {lat: 6.8433, lng: 80.0032};

			var mapProp= {
		    	center:new google.maps.LatLng(myLoc),
		    	zoom:13,
			};
			//creating map obejct using previously declared values (mapProp, myLoc)
			var map=new google.maps.Map(document.getElementById("map"),mapProp);

			//create default bound for map[Not Working] 
			var slbound = new google.maps.LatLngBounds(
				new google.maps.LatLng(8.774432,80.0120005),
				new google.maps.LatLng(7.481507,78.9197681));
			var option = {bounds: slbound};

			//------------------[Marker Information settings]----------------------------------//

			//create information window
			var inform = new google.maps.InfoWindow({
				content: '<h6>Select a Location</h6>'
			});

			//main information draft created for Infowindow
			var mDraft = '<div id="Banner">'+'<div id="topB">'+'<h6><b>'+'Place 1 test 1'+'</b></h6><br><img src="test.jpg" alt="location" styles="position:absolute; float:right"/>'+'<p>'+'Test Location Test Location Test Location Test Location'+'</p>';

			var mDraft2 = '<div id="iw-container">' +
                    '<div class="iw-title">Main Headquarter</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">NSBM Green University</div>' +
                      '<img height:50 src="image/loc2.jpg" height="115" >' +
                      '<p>The National School of Business Management (Sinhalese: ජාතික ව්‍යාපාර කළමනාකාරීත්ව විද්‍යායතනය, translit. Jāthika Wyāpāra Kaḷamanākārīthwa Vidyāyatanaya, Tamil: தேசிய வியாபார முகாமைத்துவ பாடசாலை) (also known as NSBM Green University, Sinhalese: NSBM හරිත විශ්වවිද්‍යාලය, translit. NSBM Haritha Wishwawidyālaya, Tamil: NSBM பசுமை பல்கலைக்கழகம்) is a private [2] degree awarding institute[3] in Sri Lanka, established under Companies Act No. 07 of 2007 and having company number PB 4833 and also it is the first ever green university in South Asia[3] specialising in Computer sciences, Business, Engineering and Technology.[4] It is recognized as a degree awarding institute on 19 January 2016[5] under section 25A of the Universities Act No. 16 of 1978 by Ministry of Higher Education.</p>' +
                      '<div class="iw-subTitle">Contacts</div>' +
                      '<p>Address: 309 Dampe - Pitipana Rd, කොළඹ<br>'+
                      '<br>Phone:  011 544 5000<br>e-mail: inquiries@nsbm.lk<br>Website: www.nsbm.lk</p>'+
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>';


			//--[Marker Information settings wich can embed details from Google map API libries]-//

			var inform2 = new google.maps.InfoWindow({
				content: 'inform-content2'
			});

			//------------------[Pass location Latlng to the Form]-----------------------------//
			var marker;
			function addDragableM(){
				//create Dragable marker
				marker = new google.maps.Marker({
					position: {lat: 6.8535, lng: 80.0042},
					map: map,
					title: 'Select Location',
					content: "<h2>Selected Location</h2>",
					icon: 'Icon/markers/marker-red45px.png',
					draggable: true,
					animation: google.maps.Animation.DROP


				});

				function toggleBounce() {
			        if (marker.getAnimation() !== null) {
			          marker.setAnimation(null);
			        } else {
			          marker.setAnimation(google.maps.Animation.BOUNCE);
			        }
			      }


				marker.addListener('click', toggleBounce);


				/*google.maps.event.addListener(marker,'dragend', function(){
				if(confirm("If you wanna Confirm this location press OK, otherwise press CANCEL.")){
						//console.log(marker.getPosition().lat());
					marker.setIcon("Icon/markers/marker-yellow45px.png");
					inform.setContent("<div id='Banner2'><strong>Your Location has been setted</strong><br><h6>Waiting for Confirm</h6></div>");
					inform.open(map,marker);
					marker.setAnimation(false);
					marker.setOptions({draggable: false});
					//map.setPosition( marker.getCenter());
					document.getElementById('txtLat').value = this.getPosition().lat();
					document.getElementById('txtLng').value = this.getPosition().lng();
					var lat = document.getElementById('txtLat').value;
					var lng = document.getElementById('txtLng').value;
					//$('#lat') = lat;
					//$('#lng') = lng;
					if(confirm("Do you want to add Another location. Click OK ")){
						addDragableM();

					} else return;
				} else {
					return;
				}
				

			});*/



			};
			addDragableM();


			//------------------[Get Users Marked Markers]------------------------------------//
			var markerUser;
			var locUsers = <?php get_all_locations() ?>;
			function userMarker(){
				for (var i = locUsers.length - 1; i >= 0; i--) {
					if(locUsers[i][5]=== '0'){
						continue;
					}
					markerUser = new google.maps.Marker({
						position: {lat: parseFloat(locUsers[i][1]), lng: parseFloat(locUsers[i][2])},
						map: map,
						animation: google.maps.Animation.DROP,
						icon: locUsers[i][6] === '1' ? 'Icon/markers/marker-blue45px.png' : 'Icon/markers/markergreen45px.png',
						title: locUsers[i][3],
						html: document.getElementById('form')					
					});
					google.maps.event.addListener(markerUser, 'click', (function(markerUser, i) {
		                return function() {
		                    

		                    inform2.setContent('<div id="iw-container">' +
                    '<div class="iw-title"><strong>'+locUsers[i][3]+'</strong></div>' +
                    '<div class="iw-content">' +
                      '<p">'+locUsers[i][4]+'</p><img src="php/Locations/'+(locUsers[i][7]===""?"sample.png":locUsers[i][7])+'" alt ="location" height="120"/><br>'+'</div>');
		                    inform2.open(map, markerUser);		    
		                }
		            })(markerUser, i));
					
					
				}
				

			}


			userMarker();


			

			/*
			var marker = new google.maps.Marker({
				position: myLoc,
				map: map,
				title: 'Hell',
				
				
			});

			var maker2 = new google.maps.Marker({
				position: {lat: 6.0, lng: 79.3423},
				map: map,
				title: "Location 34",
				changable: false
			});
			*/

			var arr = [{coords:{lat: 6.8433, lng: 80.0032}, icon:'Icon/flagIcon 50px.png'}, {coords:{lat: 7.8433, lng: 82.0032}}, {coords:{lat: 6.9433, lng: 80.9032}}];

			for (var i = arr.length - 1; i >= 0; i--) {
				markerAdd(arr[i]);
			}

			function markerAdd(props){
				var maker = new google.maps.Marker({
					position: props.coords,
					map: map,
					icon: props.icon
				});
			}

			
			
			
			

			
		}

		


		
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAsJYZSQ92_NQAz9kiSpW1XpyuCxRl_uI&callback=myMap"></script>



</body>
</html>