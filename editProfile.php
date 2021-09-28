<?php
require('includes/conn.inc.php');
require('includes/sessions.inc.php');
require('includes/functions.inc.php');

$alliance = $_GET['alliance'] ?? null;
$salliance = safeString($alliance);
$suserID = safeInt($_SESSION['user']);
if(!is_null($alliance)){
   $searchTerm = "%".$salliance."%";
   $sql= "SELECT * FROM playerdetails WHERE alliance LIKE :alliance";
   $stmt = $pdo->prepare($sql);
   $stmt->bindParam(':alliance', $searchTerm, PDO::PARAM_STR);
   $stmt->execute();
   $totalnoPlayers = $stmt->rowCount();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rise Of Kingdoms</title>
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
        <?php
          if($_SESSION['login'] == 0) {
            $sql= "SELECT * FROM playerdetails WHERE userID = $suserID";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':userID', $suserID, PDO::PARAM_INT);
            $stmt->execute();
            $doesExist = $stmt->rowCount();
            if($doesExist === 0) {
              ?>
              <h1>You have no records set up.</h1>
              <p><a href="cms/insert.php" class=insertLink>Create New Details</a></p>
              <?php
            } else {
        ?>
        <table>
          <thead>
            <tr>
              <th>Player</th>
              <th>Edit</th>
              <th>View</th>
             </tr>
          </thead>
          <?php
            while($row = $stmt->fetchObject()){
              echo "<tr>";
                echo "<td>$row->inGameName</td>";
                echo "<td><a href=\"cms/edit.php?playerID=$row->playerID\">Edit</td>";
                echo "<td><a href=\"details.php?playerID=$row->playerID\">View</td>";
              echo "</tr>";
            }
          ?>
        </table>
        <?php
            }
          } if($_SESSION['login'] == 1) {
        ?>
        <p><a href="cms/insert.php" class=insertLink>Create New Details</a></p>
        <form>
          <div class="playerSearchForm">
            <label for="allianceID">Search by Alliance:</label>
            <input type="text" id="alliance" name="alliance">
            <button type="submit">Search</button>
          </div>
        </form>
        <div class="detailsHolder">
          <div class="playerDetails">
            <?php
              if(!is_null($alliance)){
                if($totalnoPlayers == 0){
                  echo "<p class=\"playerNone\">No Players Found.</p>";
                } else {
                  echo "<p class=\"playerFound\">There Are $totalnoPlayers players in $alliance.</p>";
                  ?>
                  <table>
                  <thead>
                    <tr>
                      <th>Player</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <?php
                  while($row = $stmt->fetchObject()){
                    echo "<tr>";
                    echo "<td>$row->inGameName</td>";
                    echo "<td><a href=\"cms/edit.php?playerID=$row->playerID\">Edit</td>";
                    echo "<td><a href=\"cms/delete.php?playerID=$row->playerID\">Delete</td>";
                    echo "<td><a href=\"details.php?playerID=$row->playerID\">View</td>";
                    echo "</tr>";
                  }
                }
                ?>
                </table>
                <?php
              } else {
                echo "<p class=\"playerNone\">Search Term Required.</p>";
              }
            ?>
          </div>
        </div>
        <?php
          }
        ?>
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