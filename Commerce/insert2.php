<?php 
/**
*Template Name: insert2
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
    <h2>SponsorshipProposal.net</h2>
  <!-- Trigger the modal with a button -->



  <div class="container2" > 

    <form name="forma" id="sponsor" method="POST" action="final/" enctype="multipart/form-data">
      <fieldset>
      
      <div class="container1">
        <h3>Opportunities</h3> 
          <p><b>Naming Rights</b></p>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Name Event/team</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check1" value="Name Event/team"  />
              </span>
            </div>
          </div>
           <div class="row">
            <div class="col-sm-8 " style="text-align: left; font-size: 16px;">
              <p >Sponsor business will hold the naming rights  to the competition e.g. The "Brand"
              Championship Competitions. 
              This means every competition will have your business
              name in front of it in website, printed marketing and media, and other.</p>
            </div>
          </div>
              <div class="col-sm-offset-4"></div>
          <div class="row">
            <div class="col-sm-8">
            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check2" value="no" unchecked />
              </span>
            </div>    
          </div>
          <p><b>Advertising</b></p>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Company banner at all events</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check3" value="yes"/>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo on training clothes</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check4" />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo on playing clothes</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check5" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo on sport inventory and equipment</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check6" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo on printed material</b></p>
              <p style="text-align: left; font-size: 16px; margin-top: -3%;">newsletter, letterhead, brochures, flyers, tickets</p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check7" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo on souvenirs</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check8" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check9" unchecked />
              </span>
            </div>    
          </div>
          <p><b>Media</b></p>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo and link on our website</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check11" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Permanent advertisement spot on the website</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check12" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo of the sponsor at the video</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check13" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Logo of the sponsor at the photos</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check14" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Announce name of sponsor during our events</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden"name="check15" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check16" unchecked />
              </span>
            </div>    
          </div>
          <p><b>Hospitality</b></p>
          <p style="font-size: 16px; margin-top: -2%;">Tickets to the sports and official events</p>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Sports events</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check17" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Official events</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check18" checked />
              </span>
            </div>
          </div>
          <p><b>General</b></p>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Use of our logo in marketing</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check19" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Use of databases of participants/players and spectators</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check20" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Promote events (presentation of products)</b></p>
              <p style="text-align: left; font-size: 16px; margin-top: -2%;">Tickets to the sports and official events</p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check21" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Offer discount or sample product to all members</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check22" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Name a perpetual award</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check23" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Present award</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check24" checked />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <p style="text-align: left;"><b>Certificate of appreciation</b></p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check25" />
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
            </div>
            <div class="col-sm-4">
              <span class="button-checkbox">
                <button type="button" class="btn btn-md" data-color="primary"></button>
                <input type="checkbox" class="hidden" name="check26" checked />
              </span>
            </div>    
          </div>
          <p><label for="price">Price:</label><input style="width: 20%;" class="form-control" id="price" type="text"></p>

  </br>
<input class="btn btn-info btn-lg" type="submit" name="ok3" value="Submit"  />
  

</div>
</fieldset>



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
include ('db.php');
$title3 = $_POST['title3'];
$male = $_POST['male'];
$female = $_POST['female'];
$age1 = $_POST['age1'];
$age2 = $_POST['age2'];
$age3 = $_POST['age3'];
$age4 = $_POST['age4'];
$age5 = $_POST['age5'];
$age6 = $_POST['age6'];
$age7 = $_POST['age7'];
$edu1 = $_POST['edu1'];
$edu2 = $_POST['edu2'];
$edu3 = $_POST['edu3'];
$edu4 = $_POST['edu4'];
$edu5 = $_POST['edu5'];
$marital1 = $_POST['marital1'];
$marital2 = $_POST['marital2'];
$marital3 = $_POST['marital3'];
$income1 = $_POST['income1'];
$income2 = $_POST['income2'];
$income3 = $_POST['income3'];
$income4 = $_POST['income4'];
$income5 = $_POST['income5'];
$income6 = $_POST['income6'];
$max_gender = $_POST['maxGender'];
$max_age = $_POST['maxAge'];
$max_edu = $_POST['maxEdu'];
$max_marital = $_POST['maxMar'];
$max_income = $_POST['maxInc'];

$male = addslashes($male);
$female = addslashes($female);
$age1 = addslashes($age1);
$age2 = addslashes($age2);
$age3 = addslashes($age3);
$age4 = addslashes($age4);
$age5 = addslashes($age5);
$age6 = addslashes($age6);
$age7 = addslashes($age7);
$edu1 = addslashes($edu1);
$edu2 = addslashes($edu2);
$edu3 = addslashes($edu3);
$edu4 = addslashes($edu4);
$edu5 = addslashes($edu5);
$marital1 = addslashes($marital1);
$marital2 = addslashes($marital2);
$marital3 = addslashes($marital3);
$income1 = addslashes($income1);
$income2 = addslashes($income2);
$income3 = addslashes($income3);
$income4 = addslashes($income4);
$income5 = addslashes($income5);
$income6 = addslashes($income6);

$male = htmlspecialchars($male);
$female = htmlspecialchars($female);
$age1 = htmlspecialchars($age1);
$age2 = htmlspecialchars($age2);
$age3 = htmlspecialchars($age3);
$age4 = htmlspecialchars($age4);
$age5 = htmlspecialchars($age5);
$age6 = htmlspecialchars($age6);
$age7 = htmlspecialchars($age7);
$edu1 = htmlspecialchars($edu1);
$edu2 = htmlspecialchars($edu2);
$edu3 = htmlspecialchars($edu3);
$edu4 = htmlspecialchars($edu4);
$edu5 = htmlspecialchars($edu5);
$marital1 = htmlspecialchars($marital1);
$marital2 = htmlspecialchars($marital2);
$marital3 = htmlspecialchars($marital3);
$income1 = htmlspecialchars($income1);
$income2 = htmlspecialchars($income2);
$income3 = htmlspecialchars($income3);
$income4 = htmlspecialchars($income4);
$income5 = htmlspecialchars($income5);
$income6 = htmlspecialchars($income6);

if(isset($_POST['ok2'])){
$query = mysql_query("UPDATE main SET male='$male', female='$female', age1='$age1', age2='$age2', age3='$age3', age4='$age4', age5='$age5', age6='$age6', age7='$age7', edu1='$edu1', edu2='$edu2', edu3='$edu3', edu4='$edu4', edu5='$edu5', marital1='$marital1', marital2='$marital2', marital3='$marital3', income1='$income1', income2='$income2', income3='$income3', income4='$income4', income5='$income5', income6='$income6', max_gender='$max_gender', max_age='$max_age', max_edu='$max_edu', max_marital='$max_marital', max_income='$max_income' WHERE title='$title3'");
}

?>
<script type="text/javascript"> 
       $("#modal").click(function(){
           $('#myModal').modal('show');
       });
      </script>
<?php get_footer( ); ?>