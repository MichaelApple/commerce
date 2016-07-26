<?php 
/**
*Template Name: AddCompany
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
  

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">

  <div class="background" id="home">
    
  
	<div class="container1" > 


<form id="sponsor" method="POST" action="company_preview/" enctype="multipart/form-data">
		<fieldset>
			General info
		</fieldset>
		<fieldset>
			<p>Add logo</p>
			<input type="file" placeholder="Add logo" class="form-control" name="comp_logo" multiple accept="image/*"  /></br>
		</fieldset>
		<fieldset>
			<p>Name company*</p> <input id="title" class="form-control" type="text" name="comp_title" />
		</fieldset>	
		<div class="row">
			<div class="col-sm-12">
				<p>Category<select class="form-control" name="category[]">
					<option>Adversiting</option>
					<option>Mining</option>
					<option>Football</option>
					<option>Else</option>
				</select></p>
			</div> 
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>Description</p>
				<textarea name="comp_notes" class="form-control" cols="80" rows="5"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p>Website URL</p>
				<input class="form-control" type="url" name="comp_website">
			</div>
			<div class="col-sm-4">
				<p>Facebook</p>
				<input class="form-control" type="text" name="comp_facebook">
			</div>
			<div class="col-sm-4">
				<p>Twitter</p>
				<input class="form-control" type="text" name="comp_twitter"><br>
			</div>
		</div>
		<p>LOCATION</p>
		<div class="row">
			<div class="col-sm-6">
				<p>Adress</p>
				<input class="form-control" type="text" name="comp_adress">
			</div>
			<div class="col-sm-6">
				<p>City*</p>
				<input class="form-control" type="text" name="comp_city">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p>State*</p>
				<input class="form-control" type="text" name="comp_state">
			</div>
			<div class="col-sm-4">
				<p>Zip</p>
				<input class="form-control" type="text" name="comp_zip">
			</div>
			<div class="col-sm-4">
				<p>Country*</p>
				<input class="form-control" type="text" name="comp_country">
			</div>
		</div>	
		<fieldset>
		      <!-- <p><input id="title3" type="text" name="title3" value="<?php echo $title2; ?>" readonly></p> -->
		        <p>Target audience*</p> 
		        <p>Number&nbsp;&nbsp;<input type="number" name="comp_number" /></p>
		      </fieldset>
		      <div id="gender-div">
		      <p>Gender</p>
		      <p>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="progr" class="form-control " type="number" max="100" min="0" name="comp_male" >
		      <progress max="100" value="0" id="progress_male"></progress></p>

		      <p>Female&nbsp;&nbsp;<input id="progr2" class="form-control " type="number" max="100" min="0" name="comp_female" >
		      <progress max="100" value="0" id="progress_female"></progress></p>
		      </div>
		          
		          <div id="age-edu" class="row">
		            
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
		                                
		                  <p><input id="age1" class="form-control " type="number" name="comp_age1" data-max="25" size="5">&nbsp;&nbsp;<progress id="pr1" max="100" value="0"></progress></p>
		                   <p><input id="age2" class="form-control " type="number" name="comp_age2" size="3" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr2" max="100" value="0"></progress></p>
		                   <p><input id="age3" class="form-control " type="number" name="comp_age3" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr3" max="100" value="0"></progress></p>
		                   <p><input id="age4" class="form-control " type="number" name="comp_age4" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr4" max="100" value="0"></progress></p>
		                   <p><input id="age5" class="form-control " type="number" name="comp_age5" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr5" max="100" value="0"></progress></p>
		                   <p><input id="age6" class="form-control " type="number" name="comp_age6" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr6" max="100" value="0"></progress></p>
		                   <p><input id="age7" class="form-control " type="number" name="comp_age7" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr7" max="100" value="0"></progress></p>
		                  
		                </div>
		              </div>  
		            </div>
		              
		           
		            </div>    
		        	<div id="age-edu" class="row">
		            <div class="col-md-12 col-sm-12">
		                <p >Education</p>
		              <div class="row">
		                <div id="eduText" class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.41;">
		                  <p>Less than HS diploma</p>
		                  <p>High school</p>  
		                  <p>Some college</p>
		                  <p>Bachelor's degree</p>
		                  <p>Graduate degree;</p>                
		                </div>
		                <div id="edu-div" class="col-sm-8 col-xs-11" style="text-align: left;">
		                  <p><input id="edu1" class="form-control " type="number" name="comp_edu1" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
		                  <p><input id="edu2" class="form-control " type="number" name="comp_edu2" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
		                  <p><input id="edu3" class="form-control " type="number" name="comp_edu3" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
		                  <p><input id="edu4" class="form-control " type="number" name="comp_edu4" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
		                  <p><input id="edu5" class="form-control " type="number" name="comp_edu5" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
		                </div>
		              </div>
		            </div>
		          </div>
		           <br>
		    <div id="mar-inc" class="row">
		      <div class="col-md-12 col-sm-12">  
		      <p>Marital status</p>
		        <div class="row">
		          <div class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.51;">    
		            <p>Single</p>
		            <p>Married/couple</p>
		            <p>Couple with children</p>
		          </div>
		          <div id="mar-div" class="col-sm-8 col-xs-11" style="text-align: left;">
		            <p><input id="marital1" class="form-control " type="number" name="comp_marital1" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
		            <p><input id="marital2" class="form-control " type="number" name="comp_marital2" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
		            <p><input id="marital3" class="form-control " type="number" name="comp_marital3" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
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
		              <p><input id="income1" class="form-control " type="number" name="comp_income1" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
		              <p><input id="income2" class="form-control " type="number" name="comp_income2" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
		              <p><input id="income3" class="form-control " type="number" name="comp_income3" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
		              <p><input id="income4" class="form-control " type="number" name="comp_income4" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
		              <p><input id="income5" class="form-control " type="number" name="comp_income5" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
		              <p><input id="income6" class="form-control " type="number" name="comp_income6" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
		            </div>
		          </div>
		      </div>
		    </div>
		  </br>
		<input id="maxGender" type="hidden" name="maxGender" value="">
		<input id="maxAge" type="hidden" name="maxAge" value="">
		<input id="maxEdu" type="hidden" name="maxEdu" value="">
		<input id="maxMar" type="hidden" name="maxMar" value="">
		<input id="maxInc" type="hidden" name="maxInc" value="">
		<p><b>CONTACTS</b></p>
				<div class="row">
					<div class="col-sm-6">
						<p>Contact name*</p>
						<input type="text" class="form-control" name="comp_myname" >
					</div>
					<div class="col-sm-6">
						<p>Job title</p>
						<input type="text" class="form-control" name="comp_jobtitle" >
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 ">
						<p>Phone number*</p>
						<input type="text" class="form-control" name="comp_phone" >
					</div>
					<div class="col-sm-6">
						<p>Email adress*</p>
						<input type="text" class="form-control" name="comp_email" >
					</div>
				</div>
				<input class="main_buttons" type="submit" name="view" value="View"  />
				
		</form>

	</div>
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
<?php get_footer( ); ?>