<?php
require('../includes/sessions.inc.php');
require('../includes/conn.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rise Of Kingdoms</title>
    <link rel="stylesheet" href="../css/mobile.css" />
    <link
      rel="stylesheet"
      href="../css/desktop.css"
      media="only screen and (min-width: 680px)"
    />
  </head>
  <body>
    <div class="container">
      <div class="headerContainer">
        <header>
          <div>
            <img
              src="../images/rise_of_kingdoms.svg"
              alt="Rise of Kingdoms text with a shield and crossed swords behind."
              id="rokBanner"
            />
          </div>
          <div class="loginContainer">
            <?php
              if(isset($_SESSION['login'])) {
            ?>
            <ul id="logoutList">
              <li><a href="../process/logout.php">Logout</a></li>
              <li><a href="../editProfile.php">Profile</a></li>
            </ul>
            <?php
              } else {
            ?>
            <ul>
              <li><a href="../login.php">Login</a></li>
              <li><a href="../signUp.php">Sign Up</a></li>
            </ul>
            <?php
              }
            ?>
          </div>
        </header>
      </div>
      <div class="navContainer">
        <div class="navMenuContainer">
          <img src="../images/MenuIcon.svg" alt="Menu Icon" id="menuIcon" />
        </div>
        <nav>
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../calculator.php">Calculators</a></li>
            <li><a href="../talentPreviews.php">Talent Previews</a></li>
          </ul>
        </nav>
      </div>
      <main>
        <form name="insertForm" method="post" action="process/insertRecord.php">
          <div class="insertFormGroup">
            <label for="inGameName">Player Name</label>
            <input type="text" name="inGameName" id="inGameName">
          </div>
          <div class="insertFormGroup">
            <label for="alliance">Alliance</label>
            <input type="text" name="alliance" id="alliance">
          </div>
          <div class="insertFormGroup">
            <label for="vipLevel">VIP Level</label>
            <input type="number" name="vipLevel" id="vipLevel">
          </div>
          <div class="insertFormGroup">
            <label for="cavalryT4">T4 Cavalry</label>
            <input type="number" name="cavalryT4" id="cavalryT4">
          </div>
          <div class="insertFormGroup">
            <label for="infantryT4">T4 Infantry</label>
            <input type="number" name="infantryT4" id="infantryT4">
          </div>
          <div class="insertFormGroup">
            <label for="archerT4">T4 Archers</label>
            <input type="number" name="archerT4" id="archerT4">
          </div>
          <div class="insertFormGroup">
            <label for="cavalryT5">T5 Cavalry</label>
            <input type="number" name="cavalryT5" id="cavalryT5">
          </div>
          <div class="insertFormGroup">
            <label for="infantryT5">T5 Infantry</label>
            <input type="number" name="infantryT5" id="infantryT5">
          </div>
          <div class="insertFormGroup">
            <label for="archerT5">T5 Archers</label>
            <input type="number" name="archerT5" id="archerT5">
          </div>
          <div class="formButton">
            <p>
              <input type="submit" name="button" id="button" value="Insert">
            </p>
          </div>
        </form>
      </main>
      <footer>
        <div>
          <p>&copy;2020 ROK Lilith</p>
        </div>
      </footer>
    </div>
    <script src="../js/main.js"></script>
  </body>
</html>