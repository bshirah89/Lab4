<?php
require 'vendor/autoload.php';
use Respect\Validation\Validator as validationObject;

// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$isValid = validationObject::stringType()->length(3,null)->validate($name);
  if( $isValid){
		$nameErr = "Sorry Name must be more than 3 characters long";
			}else{
				$nameErr = "Correct!";
			}
	}


?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  



<h2>PHP  Validation Example</h2>
<p><span class="error"></span></p>
<form method="post" action="lab4.php">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr ?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* </span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>