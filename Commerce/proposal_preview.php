<?php 
/**
*Template Name: proposal_preview
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
	<form id="agency_view" method="post" action="final/" >

	<?php 	

		$type_proposal = $_POST['type_proposal'];
		$sport = $_POST['sport'];
		echo "<p><b>Your logo </b></p><br>" .$_POST["logo"]. "" ."<p>Company Name: <b>" .$_POST["title"]. "</b></p><br>";
	

		echo "<div class='row'>
			<div class='col-sm-6'> 
				<p>Type proposal:". " "; print_r($type_proposal[0]); echo"</p>
				<p>Date of proposal:". " " .$_POST["date_of_proposal"]. "</p>
			</div>
			<div class='col-sm-6'><p>Sport:". " "; print_r($sport[0]); echo "</p></div>
			<p>Valid until:". " " .$_POST["valid_until"]. "</p>
		</div><br>";


		echo "<p style='background-color: #D9D9D9;'>Location: <b>" .$_POST["adress"]. "," .$_POST["city"]. "," .$_POST["state"]. "," .$_POST["zip"]. "," .$_POST["country"]. "</b></p><br>
		<p class='view-content'><b>Description: </b></p>". "<p style='text-align:justify;'>" .$_POST["notes"]. "</p>". "<br><br>
		<p class='view-content'><b>Other sponsors: </b></p>". "<p style='text-align:justify;'>" .$_POST["other_sponsors"]. "</p>". "<br><br>
		<p class='view-content'><b>Media partners: </b></p>". "<p style='text-align:justify;'>" .$_POST["media_partners"]. "</p>". "<br><br>";


		echo "<div class='row'>
				<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Website URL </b></p><br>" .$_POST["website"]. "</div>
				<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Facebook </b></p><br>"."<a href='".$_POST["facebook"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce//images/05.png'></a></div>
				<div class='col-sm-4'><p style='background-color: #D9D9D9;'><b>Twitter </b></p><br>"."<a href='".$_POST["twitter"]."' target='_blank'><img src='http://commercia/wp-content/themes/Commerce//images/twitter.png'></a></div></div><br><br>";
		        
		echo "<p class='view-content'><b>Photo: </b></p>" .$image. "</<br><br>";


		echo "<h3 style='background-color: #D9D9D9;'><b>TARGET AUDIENCE </b></h3><br><p>Number:"." ";

		echo '<div id="gender-div">
			    <p>Gender</p>
			    <p>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  value="'.$_POST['male'].'">
			    <progress max="100" value="'.$_POST['male'].'" id="progress_male" ></progress></p>

			    <p>Female&nbsp;&nbsp;<input  value="'.$_POST['female'].'">
			    <progress max="100" value="'.$_POST['female'].'" id="progress_female" ></progress></p>
		    </div><br>';

		echo '<div id="age-edu" class="row">
	            <div class="col-md-12 col-sm-12">
	              <p>Age</p>
	              <div class="row">
	                <div id="ageText" class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.41;">
	                  <p>0-17</p>
	                     <p>18-24</p>
	                     <p>25-34</p>
	                     <p>35-44</p>
	                     <p>45-54</p>
	                     <p>55-64</p>
	                    <p>65+</p>
	                  
	                </div>
	                <div id="age-div" class="col-sm-8 col-xs-11" style="text-align: left;">
	                                
         	           <p><input id="age1" class="form-control " type="number" value="'.$_POST['age1'].'" name="age1" data-max="25" size="5">&nbsp;&nbsp;<progress id="pr1" max="100" value="'.$_POST['age1'].'"></progress></p>
	                   <p><input id="age2" class="form-control " type="number" value="'.$_POST['age2'].'" name="age2" size="3" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr2" max="100" value="'.$_POST['age2'].'"></progress></p>
	                   <p><input id="age3" class="form-control " type="number" value="'.$_POST['age3'].'" name="age3" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr3" max="100" value="'.$_POST['age3'].'"></progress></p>
	                   <p><input id="age4" class="form-control " type="number" value="'.$_POST['age4'].'" name="age4" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr4" max="100" value="'.$_POST['age4'].'"></progress></p>
	                   <p><input id="age5" class="form-control " type="number" value="'.$_POST['age5'].'" name="age5" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr5" max="100" value="'.$_POST['age5'].'"></progress></p>
	                   <p><input id="age6" class="form-control " type="number" value="'.$_POST['age6'].'" name="age6" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr6" max="100" value="'.$_POST['age6'].'"></progress></p>
	                   <p><input id="age7" class="form-control " type="number" value="'.$_POST['age7'].'" name="age7" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr7" max="100" value="'.$_POST['age7'].'"></progress></p>
		                  
	                </div>
	              </div>  
	            </div>
			</div><br>';

		echo '<div id="age-edu" class="row">
		            <div class="col-md-12 col-sm-12">
		                <p >Education</p>
		              <div class="row">
		                <div id="eduText" class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.41;">
		                  <p>Less than HS diploma</p>
		                  <p>High school</p>  
		                  <p>Some college</p>
		                  <p>Bachelors degree</p>
		                  <p>Graduate degree;</p>                
		                </div>
		                <div id="edu-div" class="col-sm-8 col-xs-11" style="text-align: left;">
		                  <p><input id="edu1" class="form-control " value="'.$_POST['edu1'].'" type="number" name="edu1" maxlength="3" disabled>&nbsp;&nbsp;<progress max="100" value="'.$_POST['edu1'].'"></progress></p>
		                  <p><input id="edu2" class="form-control " value="'.$_POST['edu2'].'" type="number" name="edu2" maxlength="3" disabled>&nbsp;&nbsp;<progress max="100" value="'.$_POST['edu2'].'"></progress></p>
		                  <p><input id="edu3" class="form-control " value="'.$_POST['edu3'].'" type="number" name="edu3" maxlength="3" disabled>&nbsp;&nbsp;<progress max="100" value="'.$_POST['edu3'].'"></progress></p>
		                  <p><input id="edu4" class="form-control " value="'.$_POST['edu4'].'" type="number" name="edu4" maxlength="3" disabled>&nbsp;&nbsp;<progress max="100" value="'.$_POST['edu4'].'"></progress></p>
		                  <p><input id="edu5" class="form-control " value="'.$_POST['edu5'].'" type="number" name="edu5" maxlength="3" disabled>&nbsp;&nbsp;<progress max="100" value="'.$_POST['edu5'].'"></progress></p>
		                </div>
		              </div>
		            </div>
		          </div>
		           <br>';
		echo '<div id="mar-inc" class="row">
		      <div class="col-md-12 col-sm-12">  
		      <p>Marital status</p>
		        <div class="row">
		          <div class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.51;">    
		            <p>Single</p>
		            <p>Married/couple</p>
		            <p>Couple with children</p>
		          </div>
		          <div id="mar-div" class="col-sm-8 col-xs-11" style="text-align: left;">
		            <p><input id="marital1" class="form-control " value="'.$_POST['marital1'].'" type="number" name="marital1" maxlength="3">&nbsp;&nbsp;<progress max="100" value="'.$_POST['marital1'].'"></progress></p>
		            <p><input id="marital2" class="form-control " value="'.$_POST['marital2'].'" type="number" name="marital2" maxlength="3">&nbsp;&nbsp;<progress max="100" value="'.$_POST['marital2'].'"></progress></p>
		            <p><input id="marital3" class="form-control " value="'.$_POST['marital3'].'" type="number" name="marital3" maxlength="3">&nbsp;&nbsp;<progress max="100" value="'.$_POST['marital3'].'"></progress></p>
		          </div>
		        </div>   
		      </div>
		    </div>
		    <div id="mar-inc" class="row">
		      <div id="houseText" class="col-md-12 col-sm-12"> 
		          <p>Household income</p>
		            <div class="row">
		              <div class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.71;">
		                <p>$0-$24,999</p>
		                <p>$25,000-$49,999</p>
		                <p>$50,000-$74,999</p>
		                <p>$75,000-$99,999</p>
		                <p>$100,000-$149,000</p>
		                <p>$150,000 or more</p>
		            </div>
		            <div id="inc-div" class="col-sm-8 col-xs-11" style="text-align: left;">
		              <p><input id="income1" class="form-control " value="'.$_POST['income1'].'" type="number" name="income1" maxlength="3">&nbsp;<progress max="100" value="'.$_POST['income1'].'"></progress></p>
		              <p><input id="income2" class="form-control " value="'.$_POST['income2'].'" type="number" name="income2" maxlength="3">&nbsp;<progress max="100" value="'.$_POST['income2'].'"></progress></p>
		              <p><input id="income3" class="form-control " value="'.$_POST['income3'].'" type="number" name="income3" maxlength="3">&nbsp;<progress max="100" value="'.$_POST['income3'].'"></progress></p>
		              <p><input id="income4" class="form-control " value="'.$_POST['income4'].'" type="number" name="income4" maxlength="3">&nbsp;<progress max="100" value="'.$_POST['income4'].'"></progress></p>
		              <p><input id="income5" class="form-control " value="'.$_POST['income5'].'" type="number" name="income5" maxlength="3">&nbsp;<progress max="100" value="'.$_POST['income5'].'"></progress></p>
		              <p><input id="income6" class="form-control " value="'.$_POST['income6'].'" type="number" name="income6" maxlength="3">&nbsp;<progress max="100" value="'.$_POST['income6'].'"></progress></p>
		            </div>
		          </div>
		      </div>
		    </div>
		  </br>';

		
		echo "<h3 style='background-color: #D9D9D9;'><b>CONTACTS </b></h3>
		<p><b>Contact name:</b>". " " .$_POST["myname"]. "</p>";
		echo "<p><b>Job title:</b>". " " .$_POST["jobtitle"]. "<br></p>";
		echo "<p><b>Phone number:</b>". " " .$_POST["phone"]. "<br></p>";
		echo "<p><b>Email adress:</b>". " ".$_POST["email"]. "</p><br>";


		echo "<p><input class='main_buttons' type='button' value='Print'  onclick='window.print();return false;' />"." ";
        echo "<input class='main_buttons' type='button' value='Edit Form'  onclick='history.go(-1)' />"." ";
        echo "<input class='main_buttons' type='submit' name='proposal_preview' value='Submit' /></p>";

       	echo "<input type='hidden' name='title' value='".$_POST["title"]."' />";
     	echo "<input type='hidden' name='logo' value='".$_POST["logo"]."' />";
     	echo "<input type='hidden' name='type_proposal' value='".$_POST["type_proposal"][0]."' />";
     	echo "<input type='hidden' name='sport' value='".$_POST["sport"][0]."' />";

       	echo "<input type='hidden' name='notes' value='".$_POST["notes"]."' />";
       	echo "<input type='hidden' name='website' value='".$_POST["website"]."' />";
       	echo "<input type='hidden' name='facebook' value='".$_POST["facebook"]."' />";
       	echo "<input type='hidden' name='twitter' value='".$_POST["twitter"]."' />";
       	echo "<input type='hidden' name='adress' value='".$_POST["adress"]."' />";
       	echo "<input type='hidden' name='city' value='".$_POST["city"]."' />";
       	echo "<input type='hidden' name='state' value='".$_POST["state"]."' />";
       	echo "<input type='hidden' name='zip' value='".$_POST["zip"]."' />";
       	echo "<input type='hidden' name='other_sponsors' value='".$_POST["other_sponsors"]."' />";
       	echo "<input type='hidden' name='media_partners' value='".$_POST["media_partners"]."' />";
       	echo "<input type='hidden' name='country' value='".$_POST["country"]."' />";
      	echo "<input type='hidden' name='myname' value='".$_POST["myname"]."' />";
       	echo "<input type='hidden' name='jobtitle' value='".$_POST["jobtitle"]."' />";
       	echo "<input type='hidden' name='phone' value='".$_POST["phone"]."' />";
       	echo "<input type='hidden' name='male' value='".$_POST["male"]."' />";
       	echo "<input type='hidden' name='female' value='".$_POST["female"]."' />";
      	echo "<input type='hidden' name='age1' value='".$_POST["age1"]."' />";
       	echo "<input type='hidden' name='age2' value='".$_POST["age2"]."' />";
       	echo "<input type='hidden' name='age3' value='".$_POST["age3"]."' />";
       	echo "<input type='hidden' name='age4' value='".$_POST["age4"]."' />";
       	echo "<input type='hidden' name='age5' value='".$_POST["age5"]."' />";
       	echo "<input type='hidden' name='age6' value='".$_POST["age6"]."' />";
       	echo "<input type='hidden' name='age7' value='".$_POST["age7"]."' />";
       	echo "<input type='hidden' name='edu1' value='".$_POST["edu1"]."' />";
       	echo "<input type='hidden' name='edu2' value='".$_POST["edu2"]."' />";
       	echo "<input type='hidden' name='edu3' value='".$_POST["edu3"]."' />";
       	echo "<input type='hidden' name='edu4' value='".$_POST["edu4"]."' />";
       	echo "<input type='hidden' name='edu5' value='".$_POST["edu5"]."' />";
       	echo "<input type='hidden' name='marital1' value='".$_POST["marital1"]."' />";
       	echo "<input type='hidden' name='marital2' value='".$_POST["marital2"]."' />";
       	echo "<input type='hidden' name='marital3' value='".$_POST["marital3"]."' />";
       	echo "<input type='hidden' name='income1' value='".$_POST["income1"]."' />";
       	echo "<input type='hidden' name='income2' value='".$_POST["income2"]."' />";
       	echo "<input type='hidden' name='income3' value='".$_POST["income3"]."' />";
       	echo "<input type='hidden' name='income4' value='".$_POST["income4"]."' />";
       	echo "<input type='hidden' name='income5' value='".$_POST["income5"]."' />";
       	echo "<input type='hidden' name='income6' value='".$_POST["income6"]."' />";


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