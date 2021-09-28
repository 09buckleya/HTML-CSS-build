<?php
require('includes/conn.inc.php');
require('includes/sessions.inc.php');
require('includes/functions.inc.php');

$sPlayerID = safeInt($_GET['playerID']);

$sql= "SELECT * FROM playerdetails WHERE playerID = :playerID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':playerID', $sPlayerID, PDO::PARAM_INT);
$stmt->execute();
$totalnoPlayers = $stmt->rowCount();
$row = $stmt->fetchObject();

if($totalnoPlayers === 0){
    header("Location: editProfile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $row->inGameName;?></title>
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
              alt="Rise of Kingdoms text with a shield and crossed swords behind."
              id="rokBanner"
            />
          </div>
          <div class="loginContainer">
            <?php
              if(isset($_SESSION['login'])) {
            ?>
            <ul id="logoutList">
              <li><a href="process/logout.php">Logout</a></li>
              <li><a href="editProfile.php">Profile</a></li>
            </ul>
            <?php
              } else {
            ?>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="signUp.php">Sign Up</a></li>
            </ul>
            <?php
              }
            ?>
          </div>
        </header>
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
      <main>
        <div class="playerDetails">
            <?php
            echo "<h1>$row->inGameName</h1>";
            echo "<p>Alliance: $row->alliance</p>";
            echo "<p>VIP Level: $row->vipLevel</p>";
            echo "<p>T4 Infantry Count: $row->infantryT4</p>";
            echo "<p>T4 Cavalry Count: $row->cavalryT4</p>";
            echo "<p>T4 Archer Count: $row->archerT4</p>";
            echo "<p>T5 Infantry Count: $row->infantryT5</p>";
            echo "<p>T5 Cavalry Count: $row->cavalryT5</p>";
            echo "<p>T5 Archer Count: $row->archerT5</p>";
            ?>
        </div>
      </main>
      <footer>
        <div>
          <p>&copy;2020 ROK Lilith</p>
        </div>
      </footer>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
