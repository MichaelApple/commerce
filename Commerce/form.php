<?php 
/**
*Template Name: form
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
	// define variables and set to empty values
	$nameErr = $emailErr = $messageErr = $siteErr = "";
	$name = $email = $message = $site = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "name is required";
		}
		else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "Only letters and whitespace allowed";
			}
		}

		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		}
		else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
			}
		}

		if (empty($_POST["site"])) {
			$site = "";
		}
		else {
			$site = test_input($_POST["site"]);
			// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$site)) {
     			$siteErr = "Invalid URL";
     		}
		}

		if (empty($_POST["message"])) {
			$message = "";
		}
		else {
			$message = test_input($_POST["message"]);
		}
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
 ?>

 <div class="wrapper">
	 <div class="container-contact">  
	  
	 	<div class="request">
		<?php 
		
		mail($to, $subject, $message, "From: " . $name);
		echo "Your request has been sent...";

		 ?>
		 <br>
		 <p><h1><a href="<?php bloginfo('wpurl'); ?>/index.php">Back to Home Page</a></h1></p>
		</div>
	</div>
</div>
</body>
</html>


