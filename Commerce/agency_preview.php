<?php 
/**
*Template Name: agency_preview
**/
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://commercia/wp-content/themes/Commerce/css/css/screen.css">

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">

<div class="agency_view">
	<form id="agency_view" method="post" action="agency/" >

	<?php 	echo "<h3><b>GENERAL INFO</b></h3>";
			echo "<p><b>Your logo </b></p><br>" .$_POST["agency_logo"]. "";
			echo "<p>Company Name: <b>" .$_POST["agency_title"]. "</b></p><br>";
			echo "<p class='view-content'><b>Description </b></p>". "<p style='text-align:justify;'>" .$_POST["agency_notes"]. "</p>". "<br><br>";
					
			echo "<div class='row'>
					<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Website URL </b></p><br>" .$_POST["agency_website"]. "</div>";

			echo "<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Facebook </b></p><br>"."<a href='".$_POST["agency_facebook"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce//images/05.png'></a></div>"  ;

			echo "<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Twitter </b></p><br>"."<a href='".$_POST["agency_twitter"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce//images/twitter.png'></a></div></div><br><br>";
			        
			echo "<p style='background-color: #D9D9D9;'>Location: <b>" .$_POST["agency_adress"]. "," .$_POST["agency_city"]. "," .$_POST["agency_state"]. "," .$_POST["agency_zip"]. "," .$_POST["agency_country"]. "</b></p><br>";

			echo "<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:600px; margin-left:20%;'><div id='gmap_canvas' style='height:300px;width:600px;'></div><div><small><a href='http://embedgooglemaps.com'>									embed google map							</a></small></div><div><small><a href='http://freedirectorysubmissionsites.com/'>free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(48.86533046446279,24.793514460937562),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.86533046446279,24.793514460937562)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>Ivano-Frankivsk<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><br>";

			echo "<h3 style='background-color: #D9D9D9;'><b>CLIENTS </b></h3>
			<p><b>Sport:</b></p>" .$_POST["agency_sport"]. "<br><br>";
			echo "<p> <b>Sponsors:</b></p>" .$_POST["agency_sponsors"]. "<br><br>";

			echo "<h3 style='background-color: #D9D9D9;'><b>CONTACTS </b></h3>
			<p><b>Contact name:</b>". " " .$_POST["agency_myname"]. "</p>";
			echo "<p><b>Job title:</b>". " " .$_POST["agency_jobtitle"]. "<br></p>";
			echo "<p><b>Phone number:</b>". " " .$_POST["agency_phone"]. "<br></p>";
			echo "<p><b>Email adress:</b>". " ".$_POST["agency_email"]. "</p><br>";


			echo "<input class='main_buttons' type='button' value='Print'  onclick='window.print();return false;' />"." ";
	        echo "<input class='main_buttons' type='button' value='Edit Form'  onClick='history.go(-1)' />"." ";
	        echo "<input class='main_buttons' type='submit' name='agency' value='Submit' /></p>";

	       	echo "<input type='hidden' name='agency_title' value='".$_POST["agency_title"]."' />";
	       	echo "<input type='hidden' name='agency_logo' value='".$_POST["agency_logo"]."' />";
	       	echo "<input type='hidden' name='agency_notes' value='".$_POST["agency_notes"]."' />";
	       	echo "<input type='hidden' name='agency_website' value='".$_POST["agency_website"]."' />";
	       	echo "<input type='hidden' name='agency_facebook' value='".$_POST["agency_facebook"]."' />";
	       	echo "<input type='hidden' name='agency_twitter' value='".$_POST["agency_twitter"]."' />";
	       	echo "<input type='hidden' name='agency_adress' value='".$_POST["agency_adress"]."' />";
	       	echo "<input type='hidden' name='agency_city' value='".$_POST["agency_city"]."' />";
	       	echo "<input type='hidden' name='agency_state' value='".$_POST["agency_state"]."' />";
	       	echo "<input type='hidden' name='agency_zip' value='".$_POST["agency_zip"]."' />";
	       	echo "<input type='hidden' name='agency_country' value='".$_POST["agency_country"]."' />";
	       	echo "<input type='hidden' name='agency_sport' value='".$_POST["agency_sport"]."' />";
	       	echo "<input type='hidden' name='agency_sponsors' value='".$_POST["agency_sponsors"]."' />";
	       	echo "<input type='hidden' name='agency_myname' value='".$_POST["agency_myname"]."' />";
	       	echo "<input type='hidden' name='agency_jobtitle' value='".$_POST["agency_jobtitle"]."' />";
	       	echo "<input type='hidden' name='agency_phone' value='".$_POST["agency_phone"]."' />";
	       	echo "<input type='hidden' name='agency_email' value='".$_POST["agency_email"]."' />";

	        
	         ?>
	</form>
</div>


 
</body>

</html>