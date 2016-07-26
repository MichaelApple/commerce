<?php 
/**
*Template Name: AddAgency
**/
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  

<?php wp_head(); ?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">

  <div class="background" id="home">
    
  
	<div class="container1" > 


		<form id="sponsor" method="POST"  action="agency_preview/" enctype="multipart/form-data">
			<fieldset>
				General info
			</fieldset>
			<fieldset>
				<div id="dropZone">
			        <p>Add logo</p>
					
		        </div>
			</fieldset>
			<fieldset>
				<p>Name company*</p> <input id="title" class="form-control" type="text" name="agency_title" />
			</fieldset>	
			<div class="row">
				<div class="col-sm-12">
					<p>Description</p>
					<textarea name="agency_notes" class="form-control" cols="80" rows="5"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<p>Website URL</p>
					<input class="form-control" type="url" name="agency_website">
				</div>
				<div class="col-sm-4">
					<p>Facebook</p>
					<input class="form-control" type="text" name="agency_facebook">
				</div>
				<div class="col-sm-4">
					<p>Twitter</p>
					<input class="form-control" type="text" name="agency_twitter"><br>
				</div>
			</div>
			<p>LOCATION</p>
			<div class="row">
				<div class="col-sm-6">
					<p>Adress</p>
					<input class="form-control" type="text" name="agency_adress">
				</div>
				<div class="col-sm-6">
					<p>City*</p>
					<input class="form-control" type="text" name="agency_city">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<p>State*</p>
					<input class="form-control" type="text" name="agency_state">
				</div>
				<div class="col-sm-4">
					<p>Zip</p>
					<input class="form-control" type="text" name="agency_zip">
				</div>
				<div class="col-sm-4">
					<p>Country*</p>
					<input class="form-control" type="text" name="agency_country">
				</div>
			</div>	
				<p><b>CLIENTS</b></p>
				<div class="row">
				<div class="col-sm-12">
					<p>Sport</p>
					<textarea name="agency_sport" class="form-control" cols="80" rows="5"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<p>Sponsors</p>
					<textarea name="agency_sponsors" class="form-control" cols="80" rows="5"></textarea>
				</div>
			</div>
				  <p><b>CONTACTS</b></p>
					<div class="row">
						<div class="col-sm-6">
							<p>Contact name*</p>
							<input type="text" class="form-control" name="agency_myname" >
						</div>
						<div class="col-sm-6">
							<p>Job title</p>
							<input type="text" class="form-control" name="agency_jobtitle" >
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 ">
							<p>Phone number*</p>
							<input type="text" class="form-control" name="agency_phone" >
						</div>
						<div class="col-sm-6">
							<p>Email adress*</p>
							<input type="text" class="form-control" name="agency_email" >
						</div>
					</div>
					<p><b>PUBLISH</b></p>
					<div class="row">
						<div class="col-sm-9" style="background-color: #e6e6e6; text-align: left;">Period</div>
						<div class="col-sm-1" style="background-color: #0070C0;">6</div>
						<div class="col-sm-1" style="background-color: #e6e6e6;">.</div>
						<div class="col-sm-1" style="background-color: #0070C0;">$20.00</div>
					</div>
					<div class="row">
						<div class="col-sm-9"></div>
						<div class="col-sm-1" style="background-color: #e6e6e6;">12</div>
						<div class="col-sm-1" style="background-color: #e6e6e6;"></div>
						<div class="col-sm-1" style="background-color: #e6e6e6;">$35.00</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-11" style="background-color: #e6e6e6; text-align: left;">Total</div>
						<div class="col-sm-1" style="background-color: #e6e6e6;">$20.00</div>
					</div>
					<br>
					
					<input class="main_buttons" type="submit" name="view" value="View"  />
					<!-- <input class="btn btn-info btn-lg" type="submit" name="agency" value="Submit"  /> -->
		</form>

	</div></div>
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