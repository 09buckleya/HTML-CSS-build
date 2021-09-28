<?php
require('../includes/conn.inc.php');
require('../includes/sessions.inc.php');
require('../includes/functions.inc.php');

$sPlayerID = safeInt($_GET['playerID']);

$sql= "SELECT * FROM playerdetails WHERE playerID = :playerID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':playerID', $sPlayerID, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetchObject();
if($_SESSION['login'] === 0){
    header('Location: ../editProfile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $row->inGameName; ?></title>
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
              alt="The image meant to be here is Rise of Kingdoms with a shield and crossed swords behind."
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
          <div class="deleteClass">
              <p>Are you sure you wish to delete <?php echo $row->inGameName; ?>?
              </p>
              <form name="deleteForm" method="post" action="process/deleteRecord.php">
                <input type="hidden" name="playerID" id="playerID" value="<?php echo $row->playerID; ?>">
                <p>
                    <input type="submit" value="Delete">
                </p>

                <p>
                    <a href="../editProfile.php">Save</a>
                </p>
            </form>
          </div>
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