<?php 
/**
*Template Name: agency_final
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

//Add agency Form

$agency_title = $_POST['agency_title'];
// $agency_logo = $_POST['agency_logo'];
$agency_notes = $_POST['agency_notes'];
$agency_adress = $_POST['agency_adress'];
$agency_city = $_POST['agency_city'];
$agency_state = $_POST['agency_state'];
$agency_zip = $_POST['agency_zip'];
$agency_country = $_POST['agency_country'];
$agency_name = $_POST['agency_myname'];
$agency_phone = $_POST['agency_phone'];
$agency_website = $_POST['agency_website'];
$agency_email = $_POST['agency_email'];
$agency_facebook = $_POST['agency_facebook'];
$agency_twitter = $_POST['agency_twitter'];
$agency_jobtitle = $_POST['agency_jobtitle'];
$agency_sport = $_POST['agency_sport'];
$agency_sponsors = $_POST['agency_sponsors'];
$active = 'no';

if(isset($_POST['agency'])){
    
            $agency_title = addslashes($agency_title);
			
			$agency_notes = addslashes($agency_notes);
			$agency_adress = addslashes($agency_adress);
			$agency_city = addslashes($agency_city);
			$agency_state = addslashes($agency_state);
			$agency_zip = addslashes($agency_zip);
			$agency_country = addslashes($agency_country);
			$agency_name = addslashes($agency_name);
			$agency_phone = addslashes($agency_phone);
			// $agency_website = addslashes($agency_website);
			$agency_email = addslashes($agency_email);
			$agency_facebook = addslashes($agency_facebook);
			$agency_twitter = addslashes($agency_twitter);
			$agency_jobtitle = addslashes($agency_jobtitle);
			$agency_sport = addslashes($agency_sport);
			$agency_sponsors = addslashes($agency_sponsors);

            $agency_title = htmlspecialchars($agency_title);
			// $agency_logo = htmlspecialchars($agency_logo);
			$agency_notes = htmlspecialchars($agency_notes);
			$agency_adress = htmlspecialchars($agency_adress);
			$agency_city = htmlspecialchars($agency_city);
			$agency_state = htmlspecialchars($agency_state);
			$agency_zip = htmlspecialchars($agency_zip);
			$agency_country = htmlspecialchars($agency_country);
			$agency_name = htmlspecialchars($agency_name);
			$agency_phone = htmlspecialchars($agency_phone);
			// $agency_website = htmlspecialchars($agency_website);
			$agency_email = htmlspecialchars($agency_email);
			$agency_facebook = htmlspecialchars($agency_facebook);
			$agency_twitter = htmlspecialchars($agency_twitter);
			$agency_jobtitle = htmlspecialchars($agency_jobtitle);
			$agency_sport = htmlspecialchars($agency_sport);
			$agency_sponsors = htmlspecialchars($agency_sponsors);

			
			$query = mysql_query("INSERT INTO agency (agency_title, agency_notes, agency_adress, agency_city, agency_state, agency_zip, agency_country, agency_name, agency_phone, agency_website, agency_email, agency_facebook, agency_twitter, agency_jobtitle, agency_sport, agency_sponsors) VALUES('$agency_title', '$agency_notes', '$agency_adress', '$agency_city', '$agency_state', '$agency_zip', '$agency_country', '$agency_name', '$agency_phone', '$agency_website', '$agency_email', '$agency_facebook', '$agency_twitter', '$agency_jobtitle', '$agency_sport', '$agency_sponsors')");
            
           
              
  
}


$result = mysql_query("SELECT * FROM agency ORDER BY id DESC LIMIT 1 ");
while ( $row = mysql_fetch_array($result)) {
	echo $row['agency_title'];

}


echo '

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Congratulations!</h4>
      </div>
      <div class="modal-body">
        <p>New agency is added</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="main_buttons" onClick="history.go(-3)">Back to main page</button>
      </div>
    </div>

  </div>
</div>';

?>
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
