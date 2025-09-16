<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="pro1.css">
		<script>
		/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
			function myFunction() {
			  var x = document.getElementById("myTopnav");
			  if (x.className === "top-navigation") {
				x.className += " responsive";
			  } else {
				x.className = "top-navigation";
			  }
			}
			/*function passcode(){
				var z=document.gatElementById("password");
				var t=document.getElementById("cpassword");
				if(z===t){
				print("password match");
				}
			}*/
			
			</script>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<nav class="top-nav">
		<div id="dots">
			<a href="account.html" class="active"><img src="account.png" height="20px" width="30px" id="acc"></a></div>
	<div id="logo"><label><P id="r">R</P><P id="p">P</P><P id="t">T</P><P id="s">S</P></label></div>
	<div class="top-navigation" id="myTopnav">
			<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<a href="pro1.html"><img src="home.png" height="20px" width="10px">home</a></li>
		<a href="about us.html"><img src="about.png" height="20px" width="20px">about us</a></li>
		<a  href="ticket.html" class="dropbtn"><img src="home.png" height="10px" width="10px">tickets</a>
        <!--<a><div class="dropdown">
            <a class="dropbtn"><img src="home.png" height="10px" width="10px">tickets</a>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div></a>-->
		<a href="location.html"><img src="location.png" height="20px" width="20px">locations</a></li>
		<a href="contact.html"><img src="contact.png" height="20px" width="20px">contact</a></li>
		<a href="help.html"><img src="help.png" height="20px" width="20px">help</a></li>
        <a href="account.html" class="active"><img src="account.png" height="20px" width="20px">sign-up</a></li>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		  </a>
		</div>
</nav>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<div id="footer"><h2>if you are looking for more info</h2><P>contact us on</P><a href="#" ><img src="watsapp-icon.png" id="watsapp-icon" height="40px" width="40px"></a><a href="#" ><img src="twiter.png" id="twiter" height="40px" width="40px"></a><a href="#" ><img src="facebook.png" id="facebook" height="40px" width="40px"></a><a href="#" ><img src="telegram.png" id="telegram" height="40px" width="40px"></a><P><img src="cp right.png">all  right reserved</P></div>
</body>
</html>
