<?php
require('includes/conn.inc.php');
require('includes/sessions.inc.php');
require('includes/functions.inc.php');

if(isset($_SESSION['user'])){
$sUserID = safeInt($_SESSION['user']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
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
        <div>
          <h1>Header</h1>
        </div>
        <div class="calculatorForms">
          <div class="training">
            <h2>Training</h2>
            <form id="trainingForm" >
              <p>
                <label for="1mtcount">1 Minute</label>
                <input type="number" id="1mtSpeeds" value="0" />
              </p>
              <p>
                <label for="5mtcount">5 Minute</label>
                <input type="number" id="5mtSpeeds" value="0" />
              </p>
              <p>
                <label for="10mtcount">10 Minutes</label>
                <input type="number" id="10mtSpeeds" value="0" />
              </p>
              <p>
                <label for="15mtcount">15 Minutes</label>
                <input type="number" id="15mtSpeeds" value="0" />
              </p>
              <p>
                <label for="30mtcount">30 Minutes</label>
                <input type="number" id="30mtSpeeds" value="0" />
              </p>
              <p>
                <label for="60mtcount">60 Minutes</label>
                <input type="number" id="60mtSpeeds" value="0" />
              </p>
              <p>
                <label for="3htcount">3 Hours</label>
                <input type="number" id="3htSpeeds" value="0" />
              </p>
              <p>
                <label for="8htcount">8 Hours</label>
                <input type="number" id="8htSpeeds" value="0" />
              </p>
              <p>
                <label for="15htcount">15 Hours</label>
                <input type="number" id="15htSpeeds" value="0" />
              </p>
              <p>
                <label for="24htcount">24 Hours</label>
                <input type="number" id="24htSpeeds" value="0" />
              </p>
              <p>
                <input type="submit" value="Add Up" />
              </p>
            </form>
          </div>
          <div class="building">
            <h2>Building</h2>
            <form id="buildingForm">
              <p>
                <label for="1mbcount">1 Minute</label>
                <input type="number" id="1mbSpeeds" value="0" />
              </p>
              <p>
                <label for="5mbcount">5 Minute</label>
                <input type="number" id="5mbSpeeds" value="0" />
              </p>
              <p>
                <label for="10mbcount">10 Minutes</label>
                <input type="number" id="10mbSpeeds" value="0" />
              </p>
              <p>
                <label for="15mbcount">15 Minutes</label>
                <input type="number" id="15mbSpeeds" value="0" />
              </p>
              <p>
                <label for="30mbcount">30 Minutes</label>
                <input type="number" id="30mbSpeeds" value="0" />
              </p>
              <p>
                <label for="60mbcount">60 Minutes</label>
                <input type="number" id="60mbSpeeds" value="0" />
              </p>
              <p>
                <label for="3hbcount">3 Hours</label>
                <input type="number" id="3hbSpeeds" value="0" />
              </p>
              <p>
                <label for="8hbcount">8 Hours</label>
                <input type="number" id="8hbSpeeds" value="0" />
              </p>
              <p>
                <label for="15hbcount">15 Hours</label>
                <input type="number" id="15hbSpeeds" value="0" />
              </p>
              <p>
                <label for="24hbcount">24 Hours</label>
                <input type="number" id="24hbSpeeds" value="0" />
              </p>
              <p>
                <input type="submit" value="Add Up" />
              </p>
            </form>
          </div>
          <div class="research">
            <h2>Research</h2>
            <form id="researchForm">
              <p>
                <label for="1mrcount">1 Minute</label>
                <input type="number" id="1mrSpeeds" value="0" />
              </p>
              <p>
                <label for="5mrcount">5 Minute</label>
                <input type="number" id="5mrSpeeds" value="0" />
              </p>
              <p>
                <label for="10mrcount">10 Minutes</label>
                <input type="number" id="10mrSpeeds" value="0" />
              </p>
              <p>
                <label for="15mrcount">15 Minutes</label>
                <input type="number" id="15mrSpeeds" value="0" />
              </p>
              <p>
                <label for="30mrcount">30 Minutes</label>
                <input type="number" id="30mrSpeeds" value="0" />
              </p>
              <p>
                <label for="60mrcount">60 Minutes</label>
                <input type="number" id="60mrSpeeds" value="0" />
              </p>
              <p>
                <label for="3hrcount">3 Hours</label>
                <input type="number" id="3hrSpeeds" value="0" />
              </p>
              <p>
                <label for="8hrcount">8 Hours</label>
                <input type="number" id="8hrSpeeds" value="0" />
              </p>
              <p>
                <label for="15hrcount">15 Hours</label>
                <input type="number" id="15hrSpeeds" value="0" />
              </p>
              <p>
                <label for="24hrcount">24 Hours</label>
                <input type="number" id="24hrSpeeds" value="0" />
              </p>
              <p>
                <input type="submit" value="Add Up" />
              </p>
            </form>
          </div>
          <div class="healing">
            <h2>Healing</h2>
            <form id="healingForm">
              <p>
                <label for="1mhcount">1 Minute</label>
                <input type="number" id="1mhSpeeds" value="0" />
              </p>
              <p>
                <label for="5mhcount">5 Minute</label>
                <input type="number" id="5mhSpeeds" value="0" />
              </p>
              <p>
                <label for="10mhcount">10 Minutes</label>
                <input type="number" id="10mhSpeeds" value="0" />
              </p>
              <p>
                <label for="15mhcount">15 Minutes</label>
                <input type="number" id="15mhSpeeds" value="0" />
              </p>
              <p>
                <label for="30mhcount">30 Minutes</label>
                <input type="number" id="30mhSpeeds" value="0" />
              </p>
              <p>
                <label for="60mhcount">60 Minutes</label>
                <input type="number" id="60mhSpeeds" value="0" />
              </p>
              <p>
                <label for="3hhcount">3 Hours</label>
                <input type="number" id="3hhSpeeds" value="0" />
              </p>
              <p>
                <label for="8hhcount">8 Hours</label>
                <input type="number" id="8hhSpeeds" value="0" />
              </p>
              <p>
                <label for="15hhcount">15 Hours</label>
                <input type="number" id="15hhSpeeds" value="0" />
              </p>
              <p>
                <label for="24hhcount">24 Hours</label>
                <input type="number" id="24hhSpeeds" value="0" />
              </p>
              <p>
                <input type="submit" value="Add Up" />
              </p>
            </form>
          </div>
          <div class="universals">
            <h2>Universals</h2>
            <form id="universalsForm">
              <p>
                <label for="1mucount">1 Minute</label>
                <input type="number" id="1muSpeeds" value="0" />
              </p>
              <p>
                <label for="5mucount">5 Minute</label>
                <input type="number" id="5muSpeeds" value="0" />
              </p>
              <p>
                <label for="10mucount">10 Minutes</label>
                <input type="number" id="10muSpeeds" value="0" />
              </p>
              <p>
                <label for="15mucount">15 Minutes</label>
                <input type="number" id="15muSpeeds" value="0" />
              </p>
              <p>
                <label for="30mucount">30 Minutes</label>
                <input type="number" id="30muSpeeds" value="0" />
              </p>
              <p>
                <label for="60mucount">60 Minutes</label>
                <input type="number" id="60muSpeeds" value="0" />
              </p>
              <p>
                <label for="3hucount">3 Hours</label>
                <input type="number" id="3huSpeeds" value="0" />
              </p>
              <p>
                <label for="8hucount">8 Hours</label>
                <input type="number" id="8huSpeeds" value="0" />
              </p>
              <p>
                <label for="15hucount">15 Hours</label>
                <input type="number" id="15huSpeeds" value="0" />
              </p>
              <p>
                <label for="24hucount">24 Hours</label>
                <input type="number" id="24huSpeeds" value="0" />
              </p>
              <p>
                <label for="3ducount">3 Days</label>
                <input type="number" id="3duSpeeds" value="0" />
              </p>
              <p>
                <label for="7ducount">7 Days</label>
                <input type="number" id="7duSpeeds" value="0" />
              </p>
              <p>
                <input type="submit" value="Add Up" />
              </p>
            </form>
          </div>
          <div class="resultsContainer">
            <h2>Total Speeds</h2>
            <p id="tresults">Training Speeds :</p>
            <p id="bresults">Building Speeds :</p>
            <p id="rresults">Research Speeds :</p>
            <p id="hresults">Healing Speeds :</p>
            <p id="uresults">Universal Speeds :</p>
          </div>
        </div>
      </main>
      <footer>
        <div>
          <p>&copy;2020 ROK Lilith</p>
        </div>
      </footer>
    </div>
    <script src="js/main.js"></script>
    <script src="js/formCalculation.js"></script>
  </body>
</html>
