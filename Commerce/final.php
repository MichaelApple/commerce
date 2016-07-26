<?php 
/**
*Template Name: final
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

<?php
include ('db.php');



$title = $_POST['title'];
$type_proposal_value = $_POST['type_proposal'];
$sport_value = $_POST['sport'];
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


// ДРУГА INSERT
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

$check = $_POST['check'];
  $n = count($check);
    for($i=0; $i<$n; $i++)
      {
        echo($check[$i].' ');
      }



 if(isset($_POST['proposal_preview'])){
    // if (isset($type_proposal)){
    //     foreach ($type_proposal as $type_proposal_value){
    //       $type_proposal_value = addslashes($type_proposal_value);
    //       $type_proposal_value = htmlspecialchars($type_proposal_value);
    //     }
    //     foreach ($sport as $sport_value) {
    //       $sport_value = addslashes($sport_value);
    //       $sport_value = htmlspecialchars($sport_value);
    //     }
            $status = 1;
            $title = addslashes($title);
            $date_of_proposal = addslashes($date_of_proposal);
            $valid_until = addslashes($valid_until);
            $type_proposal_value = addslashes($type_proposal_value);
            $sport_value = addslashes($sport_value);
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
            $date_of_proposal = htmlspecialchars($date_of_proposal);
            $valid_until = htmlspecialchars($valid_until);
            $type_proposal_value = htmlspecialchars($type_proposal_value);
            $sport_value = htmlspecialchars($sport_value);
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

            $query = mysql_query("INSERT INTO main(status, title, type_proposal, sport, date_of_proposal, valid_until, other_sponsors, media_partners, notes, photo, adress, city, state, zip, country, name, phone, website, email, facebook, twitter, male, female, age1, age2, age3, age4, age5, age6, age7, edu1, edu2, edu3, edu4, edu5, marital1, marital2, marital3, income1, income2, income3, income4, income5, income6) VALUES('$status', '$title', '$type_proposal_value', '$sport_value', '$date_of_proposal', '$valid_until', '$other_sponsors', '$media_partners', '$notes', '$photo', '$adress', '$city', '$state', '$zip', '$country', '$name', '$phone', '$website', '$email', '$facebook', '$twitter', '$male', '$female', '$age1', '$age2', '$age3', '$age4', '$age5', '$age6', '$age7', '$edu1', '$edu2', '$edu3', '$edu4', '$edu5', '$marital1', '$marital2', '$marital3', '$income1', '$income2', '$income3', '$income4', '$income5', '$income6')");
     }
// }     



echo "

<!-- Modal -->
<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Congratulations!</h4>
      </div>
      <div class='modal-body'>
        <p>This is the end!</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='main_buttons' onClick='history.go(-3)'>Close</button>
      </div>
    </div>

  </div>
</div>";?>
<script type="text/javascript"> 
       $(document).ready(function(){
           $('#myModal').modal('show');
       });
      </script>


<!-- if(($_POST["Submit"]=="Submit")){

  for ($i=0; $i<sizeof($checkbox1);$i++) {
    $query = "INSERT INTO checkboxes (check1) VALUES ('".$checkbox1[$i]."')";
    mysql_query($query) or die(mysql_error());  
  }

  echo "Record is inserted";

} -->




</body>
</html>
