<?php
require('includes/conn.inc.php');
require('includes/sessions.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link
      rel="stylesheet"
      href="css/desktop.css"
      media="only screen and (min-width: 680px)"
    />
  </head>
  <body>
    <div class="container">
	  <div class="headerContainer">
        <header>
        <div>
          <img
            src="images/rise_of_kingdoms.svg"
            alt="The image meant to be here is Rise of Kingdoms with a shield and crossed swords behind."
            id="rokBanner"
          />
		</div>
		<div class="navContainer">
          <div class="navMenuContainer">
            <img src="images/MenuIcon.svg" alt="Menu Icon" id="menuIcon" />
          </div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="calculator.php">Calculators</a></li>
              <li><a href="talentPreviews.php">Talent Previews</a></li>
            </ul>
          </nav>
        </div>
	    <div class="loginContainer">
		  <div class="login">
			<h1>Sign Up</h1>
		    <?php
			  if(isset($_SESSION['regError'])) {
				switch($_SESSION['regError']){
				  case 1:
					echo "<p class=\"error\">Invalid Email Address</p>";
				  break;
				  case 2:
					echo "<p class=\"error\">Passwords do not match</p>";
				  break;
				  case 3:
					echo "<p class=\"error\">Email in use</p>";
				  break;
				}
			  }
		    ?>
		    <form action="process/userSignUp.php" method="post">
			  <div>
				<label for="userLogin">Email:</label>
				<input type="text" name="userLogin" id="userLogin">
			  </div>
			  <div>
				<label for="password">Password:</label>
				<input type="text" name="password" id="password">
			  </div>
			  <div>
				<label for="passwordConfirm">Confirm Password:</label>
				<input type="text" name="passwordConfirm" id="passwordConfirm">
			  </div>
			  <div>
				<input type="submit" value="Register">
			  </div>
		    </form>
		  </div>
		</div>
	  </header>
	  <footer>
        <div>
          <p>&copy;2020 ROK Lilith</p>
        </div>
      </footer>
	</div>
	<script src="js/main.js"></script>
  </body>
</html>
