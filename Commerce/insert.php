<?php 
/**
*Template Name: insert
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
<?php
include ('db.php');
$title2 = $_POST['title2'];
?>

</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">
<div class="background" id="home">
      
  <div class="container2" > 
    
    <form name="forma" id="sponsor" method="POST" action="insert2/" enctype="multipart/form-data">
      <fieldset>
      <p><input id="title3" type="text" name="title3" value="<?php echo $title2; ?>" readonly></p>
        <p>Target audience*</p> 
        <p>Number&nbsp;&nbsp;<input type="number" name="number" /></p>
      </fieldset>
      <div id="gender-div">
      <p>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="progr" class="form-control " type="number" max="100" min="0" name="male" >
      <progress max="100" value="0" id="progress_male"></progress></p>

      <p>Female&nbsp;&nbsp;<input id="progr2" class="form-control " type="number" max="100" min="0" name="female" >
      <progress max="100" value="0" id="progress_female"></progress></p>
      </div>
          
          <div id="age-edu" class="row">
            <div class="col-md-6 col-sm-12 ">
              <p>Age</p>
              <div class="row">
                <div  class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.75;">
                  <p>0-17</p>
                     <p>18-24</p>
                     <p>25-34</p>
                     <p>35-44</p>
                     <p>45-54</p>
                     <p>55-64</p>
                    <p>65+</p>
                  
                </div>
                <div id="age-div" class="col-sm-8 col-xs-11" style="text-align: left;">
                                
                  <p><input id="age1" class="form-control " type="number" name="age1" data-max="25" size="5">&nbsp;&nbsp;<progress id="pr1" max="100" value="0"></progress></p>
                   <p><input id="age2" class="form-control " type="number" name="age2" size="3" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr2" max="100" value="0"></progress></p>
                   <p><input id="age3" class="form-control " type="number" name="age3" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr3" max="100" value="0"></progress></p>
                   <p><input id="age4" class="form-control " type="number" name="age4" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr4" max="100" value="0"></progress></p>
                   <p><input id="age5" class="form-control " type="number" name="age5" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr5" max="100" value="0"></progress></p>
                   <p><input id="age6" class="form-control " type="number" name="age6" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr6" max="100" value="0"></progress></p>
                   <p><input id="age7" class="form-control " type="number" name="age7" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr7" max="100" value="0"></progress></p>
                  
                </div>
              </div>  
            </div>
                
        
            <div class="col-md-6 col-sm-12">
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
                  <p><input id="edu1" class="form-control " type="number" name="edu1" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
                  <p><input id="edu2" class="form-control " type="number" name="edu2" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
                  <p><input id="edu3" class="form-control " type="number" name="edu3" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
                  <p><input id="edu4" class="form-control " type="number" name="edu4" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
                  <p><input id="edu5" class="form-control " type="number" name="edu5" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
                </div>
              </div>
            </div>
          </div>
           
    <div id="mar-inc" class="row">
      <div class="col-md-6 col-sm-12">  
      <p>Marital status</p>
        <div class="row">
          <div class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.51;">    
            <p>Single</p>
            <p>Married/couple</p>
            <p>Couple with children</p>
          </div>
          <div id="mar-div" class="col-sm-8 col-xs-11" style="text-align: left;">
            <p><input id="marital1" class="form-control " type="number" name="marital1" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
            <p><input id="marital2" class="form-control " type="number" name="marital2" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
            <p><input id="marital3" class="form-control " type="number" name="marital3" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
          </div>
        </div>   
      </div>
      <div class="col-md-6 col-sm-12"> 
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
              <p><input id="income1" class="form-control " type="number" name="income1" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
              <p><input id="income2" class="form-control " type="number" name="income2" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
              <p><input id="income3" class="form-control " type="number" name="income3" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
              <p><input id="income4" class="form-control " type="number" name="income4" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
              <p><input id="income5" class="form-control " type="number" name="income5" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
              <p><input id="income6" class="form-control " type="number" name="income6" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
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
<input class="btn btn-lg btn-info" type="submit" name="ok2" value="Step 3" />
</form>

  </div>
</div>

 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid menu">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>/index.php">SponsorshipProposal</a>
      </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="#home">Home</a></li>
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register"> Login/Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>     

<?php 
$title = $_POST['title'];
$type_proposal = $_POST['type_proposal'];
$sport = $_POST['sport'];
$date_of_proposal = $_POST['date_of_proposal'];
$valid_until = $_POST['valid_until'];
$other_sponsors = $_POST['other_sponsors'];
$media_partners = $_POST['media_partners'];
$notes = $_POST['notes'];
$photo = $_POST['photo'];
$adress = $_POST['adress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$name = $_POST['myname'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$email = $_POST['email'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];

if(isset($_POST['ok'])){
    if ($type_proposal){
        foreach ($type_proposal as $type_proposal_value){
          foreach ($sport as $sport_value) {
            $title = addslashes($title);
            $type_proposal_value = addslashes($type_proposal_value);
            $sport_value = addslashes($sport_value);
            $date_of_proposal = addslashes($date_of_proposal);
            $valid_until = addslashes($valid_until);
            $other_sponsors = addslashes($other_sponsors);
            $media_partners = addslashes($media_partners);
            $notes = addslashes($notes);
            $photo = addslashes($photo);
            $adress = addslashes($adress);
            $city = addslashes($city);
            $state = addslashes($state);
            $zip = addslashes($zip);
            $country = addslashes($country);
            $name = addslashes($name);
            $phone = addslashes($phone);
            $website = addslashes($website);
            $email = addslashes($email);
            $facebook = addslashes($facebook);
            $twitter = addslashes($twitter);

            $title = htmlspecialchars($title);
            $type_proposal_value = htmlspecialchars($type_proposal_value);
            $sport_value = htmlspecialchars($sport_value);
            $date_of_proposal = htmlspecialchars($date_of_proposal);
            $valid_until = htmlspecialchars($valid_until);
            $other_sponsors = htmlspecialchars($other_sponsors);
            $media_partners = htmlspecialchars($media_partners);
            $notes = htmlspecialchars($notes);
            $photo = htmlspecialchars($photo);
            $adress = htmlspecialchars($adress);
            $city = htmlspecialchars($city);
            $state = htmlspecialchars($state);
            $zip = htmlspecialchars($zip);
            $country = htmlspecialchars($country);
            $name = htmlspecialchars($name);
            $phone = htmlspecialchars($phone);
            $website = htmlspecialchars($website);
            $email = htmlspecialchars($email);
            $facebook = htmlspecialchars($facebook);
            $twitter = htmlspecialchars($twitter);


            $query = mysql_query("INSERT INTO main(title, type_proposal, sport, date_of_proposal, valid_until, other_sponsors, media_partners, notes, photo, adress, city, state, zip, country, name, phone, website, email, facebook, twitter) VALUES('$title', '$type_proposal_value', '$sport_value', '$date_of_proposal', '$valid_until', '$other_sponsors', '$media_partners', '$notes', '$photo', '$adress', '$city', '$state', '$zip', '$country', '$name', '$phone', '$website', '$email', '$facebook', '$twitter')");
      }
    }
  }
}

?>


<?php get_footer( ); ?>
