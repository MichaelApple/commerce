<?php 
/**
*Template Name: company_preview
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
	<form id="agency_view" method="post" action="company/" >

	<?php 	

	$category = $_POST['category'];

	echo "<h3><b>GENERAL INFO</b></h3>";
			echo "<p><b>Your logo </b></p><br>" .$_POST["comp_logo"]. "";
			echo "<p>Company Name: <b>" .$_POST["comp_title"]. "</b></p>";
					
			echo "<p>Category: <b>"; print_r($category[0]);  echo "</b></p>";
				
			// Website URL
			echo "<p class='view-content'><b>Description </b></p>". "<p style='text-align:justify;'>" .$_POST["comp_notes"]. "</p>". "<br><br>";
			echo "<div class='row'>
					<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Website URL </b></p><br>" .$_POST["comp_website"]. "</div>";
			// Facebook
			echo "<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Facebook </b></p><br>"."<a href='".$_POST["comp_facebook"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce//images/05.png'></a></div>"  ;
			// Twitter
			echo "<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Twitter </b></p><br>"."<a href='".$_POST["comp_twitter"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce//images/twitter.png'></a></div></div><br><br>";
		    // Location:
			echo "<p style='background-color: #D9D9D9;'>Location: <b>" .$_POST["agency_adress"]. "," .$_POST["agency_city"]. "," .$_POST["agency_state"]. "," .$_POST["agency_zip"]. "," .$_POST["agency_country"]. "</b></p><br>";
			// TARGET AUDIENCE
			echo "<h3 style='background-color: #D9D9D9;'><b>TARGET AUDIENCE </b></h3><br>

			<p><b>Gender:</b>" .$_POST["comp_male"]. $_POST["comp_female"]. "</p>";
			
			echo "<p><b>Age:</b>" .$_POST["comp_age1"]. $_POST["comp_age2"]. "</p>";

			echo "<p><b>Education:</b>" .$_POST["comp_edu1"]. $_POST["comp_edu2"]. "</p>";

			echo "<p><b>Marital status:</b>" .$_POST["comp_marital1"]. $_POST["comp_marital2"]. "</p>";

			echo "<p><b>Household income:</b>" .$_POST["comp_male"]. $_POST["comp_male"]. "</p><br><br>";

			echo "<h3 style='background-color: #D9D9D9;'><b>CONTACTS </b></h3>
			<p><b>Contact name:</b>". " " .$_POST["comp_myname"]. "</p>";
			echo "<p><b>Job title:</b>". " " .$_POST["comp_jobtitle"]. "<br></p>";
			echo "<p><b>Phone number:</b>". " " .$_POST["comp_phone"]. "<br></p>";
			echo "<p><b>Email adress:</b>". " ".$_POST["comp_email"]. "</p><br>";


			echo "<input class='main_buttons' type='button' value='Print'  onclick='window.print();return false;' />"." ";
	        echo "<input class='main_buttons' type='button' value='Edit Form'  onClick='history.go(-1)' />"." ";
	        echo "<input class='main_buttons' type='submit' name='company' value='Submit' /></p>";

	       	echo "<input type='hidden' name='comp_title' value='".$_POST["comp_title"]."' />";
	       	// Категорії не хочуть інсертитись...
	       	echo "<input type='hidden' name='category' value='".$_POST["category"][0]."' />";
	       	echo "<input type='hidden' name='comp_logo' value='".$_POST["comp_logo"]."' />";
	       	echo "<input type='hidden' name='comp_notes' value='".$_POST["comp_notes"]."' />";
	       	echo "<input type='hidden' name='comp_website' value='".$_POST["comp_website"]."' />";
	       	echo "<input type='hidden' name='comp_facebook' value='".$_POST["comp_facebook"]."' />";
	       	echo "<input type='hidden' name='comp_twitter' value='".$_POST["comp_twitter"]."' />";
	       	echo "<input type='hidden' name='comp_adress' value='".$_POST["comp_adress"]."' />";
	       	echo "<input type='hidden' name='comp_city' value='".$_POST["comp_city"]."' />";
	       	echo "<input type='hidden' name='comp_state' value='".$_POST["comp_state"]."' />";
	       	echo "<input type='hidden' name='comp_zip' value='".$_POST["comp_zip"]."' />";
	       	echo "<input type='hidden' name='comp_country' value='".$_POST["comp_country"]."' />";
	      	echo "<input type='hidden' name='comp_myname' value='".$_POST["comp_myname"]."' />";
	       	echo "<input type='hidden' name='comp_jobtitle' value='".$_POST["comp_jobtitle"]."' />";
	       	echo "<input type='hidden' name='comp_phone' value='".$_POST["comp_phone"]."' />";
	       	echo "<input type='hidden' name='comp_male' value='".$_POST["comp_male"]."' />";
	       	echo "<input type='hidden' name='comp_female' value='".$_POST["comp_female"]."' />";
	      	echo "<input type='hidden' name='comp_age1' value='".$_POST["comp_age1"]."' />";
	       	echo "<input type='hidden' name='comp_age2' value='".$_POST["comp_age2"]."' />";
	       	echo "<input type='hidden' name='comp_age3' value='".$_POST["comp_age3"]."' />";
	       	echo "<input type='hidden' name='comp_age4' value='".$_POST["comp_age4"]."' />";
	       	echo "<input type='hidden' name='comp_age5' value='".$_POST["comp_age5"]."' />";
	       	echo "<input type='hidden' name='comp_age6' value='".$_POST["comp_age6"]."' />";
	       	echo "<input type='hidden' name='comp_age7' value='".$_POST["comp_age7"]."' />";
	       	echo "<input type='hidden' name='comp_edu1' value='".$_POST["comp_edu1"]."' />";
	       	echo "<input type='hidden' name='comp_edu2' value='".$_POST["comp_edu2"]."' />";
	       	echo "<input type='hidden' name='comp_edu3' value='".$_POST["comp_edu3"]."' />";
	       	echo "<input type='hidden' name='comp_edu4' value='".$_POST["comp_edu4"]."' />";
	       	echo "<input type='hidden' name='comp_edu5' value='".$_POST["comp_edu5"]."' />";
	       	echo "<input type='hidden' name='comp_marital1' value='".$_POST["comp_marital1"]."' />";
	       	echo "<input type='hidden' name='comp_marital2' value='".$_POST["comp_marital2"]."' />";
	       	echo "<input type='hidden' name='comp_marital3' value='".$_POST["comp_marital3"]."' />";
	       	echo "<input type='hidden' name='comp_income1' value='".$_POST["comp_income1"]."' />";
	       	echo "<input type='hidden' name='comp_income2' value='".$_POST["comp_income2"]."' />";
	       	echo "<input type='hidden' name='comp_income3' value='".$_POST["comp_income3"]."' />";
	       	echo "<input type='hidden' name='comp_income4' value='".$_POST["comp_income4"]."' />";
	       	echo "<input type='hidden' name='comp_income5' value='".$_POST["comp_income5"]."' />";
	       	echo "<input type='hidden' name='comp_income6' value='".$_POST["comp_income6"]."' />";


	        
	         ?>
	</form>
</div>

<nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid menu">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>/index.php">SponsorshipProposal.net</a>
      </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li class=""><a href="#home">Home</a></li>
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#">Proposals</a></li>
        <li><a href="#">Sponsors</a></li>
        <li><a href="#">Agencies</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register/"> Login/Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>
 
</body>

</html>