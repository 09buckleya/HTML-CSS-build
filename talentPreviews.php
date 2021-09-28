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
    <title>Talent Show</title>
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
          <h1>View Talents</h1>
        </div>
        <div class="presentationContainer">
          <div class="scrollMenuContainer">
            <ul>
              <h4>Legendary</h4>
              <li id="aethelClicker">
                <img src="images/commanders/Aethelflaed.png" /><a
                  href="#"
                  onclick="currentSlide(1)"
                  >Aethelflaed</a
                >
              </li>
              <li>
                <img src="images/commanders/Alexander the Great.png" /><a
                  href="#"
                  onclick="currentSlide(3)"
                  >Alexander</a
                >
              </li>
              <li>
                <img src="images/commanders/Artemisia I.png" /><a
                  href="#"
                  onclick="currentSlide(5)"
                  >Artemisia I</a
                >
              </li>
              <li>
                <img src="images/commanders/Attila.png" /><a
                  href="#"
                  onclick="currentSlide(9)"
                  >Attila</a
                >
              </li>
              <li>
                <img src="images/commanders/Cao Cao.png" /><a
                  href="#"
                  onclick="currentSlide(12)"
                  >Cao Cao</a
                >
              </li>
              <li>
                <img src="images/commanders/Charlemagne.png" /><a
                  href="#"
                  onclick="currentSlide(14)"
                  >Charlemagne</a
                >
              </li>
              <li>
                <img src="images/commanders/Charles Martel.png" /><a
                  href="#"
                  onclick="currentSlide(15)"
                  >Charles</a
                >
              </li>
              <li>
                <img src="images/commanders/Cleopatra VII.png" /><a
                  href="#"
                  onclick="currentSlide(18)"
                  >Cleopatra VII</a
                >
              </li>
              <li>
                <img src="images/commanders/Constantine I.png" /><a
                  href="#"
                  onclick="currentSlide(19)"
                  >Constantine I</a
                >
              </li>
              <li>
                <img src="images/commanders/Edward of Woodstock.png" /><a
                  href="#"
                  onclick="currentSlide(20)"
                  >Edward</a
                >
              </li>
              <li>
                <img src="images/commanders/El Cid.png" /><a
                  href="#"
                  onclick="currentSlide(21)"
                  >El Cid</a
                >
              </li>
              <li>
                <img src="images/commanders/Frederick I.png" /><a
                  href="#"
                  onclick="currentSlide(22)"
                  >Frederick I</a
                >
              </li>
              <li>
                <img src="images/commanders/Genghis Khan.png" /><a
                  href="#"
                  onclick="currentSlide(23)"
                  >Genghis Khan</a
                >
              </li>
              <li>
                <img src="images/commanders/Guan Yu.png" /><a
                  href="#"
                  onclick="currentSlide(24)"
                  >Guan Yu</a
                >
              </li>
              <li>
                <img src="images/commanders/Hannibal Barca.png" /><a
                  href="#"
                  onclick="currentSlide(25)"
                  >Hannibal</a
                >
              </li>
              <li>
                <img src="images/commanders/Ishida Mitsunari.png" /><a
                  href="#"
                  onclick="currentSlide(26)"
                  >Ishida</a
                >
              </li>
              <li>
                <img src="images/commanders/Julius Caesar.png" /><a
                  href="#"
                  onclick="currentSlide(27)"
                  >Julius Caesar</a
                >
              </li>
              <li>
                <img src="images/commanders/Leonidas I.png" /><a
                  href="#"
                  onclick="currentSlide(28)"
                  >Leonidas I</a
                >
              </li>
              <li>
                <img src="images/commanders/Mehmed II.png" /><a
                  href="#"
                  onclick="currentSlide(29)"
                  >Mehmed II</a
                >
              </li>
              <li>
                <img src="images/commanders/Minamoto no Yoshitsune.png" /><a
                  onclick="currentSlide(30)"
                  href="#"
                  >Minamoto</a
                >
              </li>
              <li>
                <img src="images/commanders/Ramesses II.png" /><a
                  href="#"
                  onclick="currentSlide(31)"
                  >Ramesses II</a
                >
              </li>
              <li>
                <img src="images/commanders/Richard I.png" /><a
                  href="#"
                  onclick="currentSlide(32)"
                  >Richard I</a
                >
              </li>
              <li>
                <img src="images/commanders/Saladin.png" /><a
                  href="#"
                  onclick="currentSlide(33)"
                  >Saladin</a
                >
              </li>
              <li>
                <img src="images/commanders/Seondeok.png" /><a
                  href="#"
                  onclick="currentSlide(34)"
                  >Seondeuk</a
                >
              </li>
              <li>
                <img src="images/commanders/Takeda Shingen.png" /><a
                  href="#"
                  onclick="currentSlide(35)"
                  >Takeda</a
                >
              </li>
              <li>
                <img src="images/commanders/Tomyris.png" /><a
                  href="#"
                  onclick="currentSlide(36)"
                  >Tomyris</a
                >
              </li>
              <li>
                <img src="images/commanders/Wu Zetian.png" /><a
                  href="#"
                  onclick="currentSlide(37)"
                  >Wu Zetian</a
                >
              </li>
              <li>
                <img src="images/commanders/Yi Seong-Gye.png" /><a
                  href="#"
                  onclick="currentSlide(38)"
                  >Yi Seong-Gye</a
                >
              </li>
              <h4>Epic</h4>
              <li>
                <img src="images/commanders/Baibars.png" /><a
                  href="#"
                  onclick="currentSlide(39)"
                  >Baibars</a
                >
              </li>
              <li>
                <img src="images/commanders/Belisarius.png" /><a
                  href="#"
                  onclick="currentSlide(40)"
                  >Belisarius</a
                >
              </li>
              <li>
                <img src="images/commanders/Boudica.png" /><a
                  href="#"
                  onclick="currentSlide(41)"
                  >Boudica</a
                >
              </li>
              <li>
                <img src="images/commanders/Eulji Mundeok.png" /><a
                  href="#"
                  onclick="currentSlide(42)"
                  >Eulji</a
                >
              </li>
              <li>
                <img src="images/commanders/Hermann.png" /><a
                  href="#"
                  onclick="currentSlide(43)"
                  >Hermann</a
                >
              </li>
              <li>
                <img src="images/commanders/Joan of Arc.png" /><a
                  href="#"
                  onclick="currentSlide(44)"
                  >Joan of Arc</a
                >
              </li>
              <li>
                <img src="images/commanders/Keira.png" /><a
                  href="#"
                  onclick="currentSlide(45)"
                  >Keira</a
                >
              </li>
              <li>
                <img src="images/commanders/Kusunoki Masashige.png" /><a
                  href="#"
                  onclick="currentSlide(46)"
                  >Kusunoki</a
                >
              </li>
              <li>
                <img src="images/commanders/Lohar.png" /><a
                  href="#"
                  onclick="currentSlide(47)"
                  >Lohar</a
                >
              </li>
              <li>
                <img src="images/commanders/Osman I.png" /><a
                  href="#"
                  onclick="currentSlide(48)"
                  >Osman I</a
                >
              </li>
              <li>
                <img src="images/commanders/Pelagius.png" /><a
                  href="#"
                  onclick="currentSlide(49)"
                  >Pelagius</a
                >
              </li>
              <li>
                <img src="images/commanders/Scipio Africanus.png" /><a
                  href="#"
                  onclick="currentSlide(50)"
                  >Scipio</a
                >
              </li>
              <li>
                <img src="images/commanders/Sun Tzu.png" /><a
                  href="#"
                  onclick="currentSlide(51)"
                  >Sun Tzu</a
                >
              </li>
            </ul>
          </div>
          <div class="slidesContainer">
            <div class="mySlides">
              <div class="imageNumber">1 / 2</div>
              <img src="images/talents/Aethelflaed_38-0-36_.svg" />
              <div class="captionText">Aethelflaed field/rally Talents</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">2 / 2</div>
              <img src="images/talents/Aethelflaed_10-40-24_.svg" />
              <div class="captionText">Caption Text 2</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 2</div>
              <img src="images/talents/Alexander_47-0-27_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">2 / 2</div>
              <img src="images/talents/Alexander_50-0-24_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 4</div>
              <img src="images/talents/Artemisia_I_13-21-40_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">2 / 4</div>
              <img src="images/talents/Artemisia_I_26-25-23_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">3 / 4</div>
              <img src="images/talents/Artemisia_I_27-21-26_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">4 / 4</div>
              <img src="images/talents/Artemisia_I_48-0-26_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 3</div>
              <img src="images/talents/Attila_25-18-31_1_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">2 / 3</div>
              <img src="images/talents/Attila_25-18-31_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">3 / 3</div>
              <img src="images/talents/Attila_40-7-27_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 2</div>
              <img src="images/talents/Cao_Cao_12-18-44_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">2 / 2</div>
              <img src="images/talents/Cao_Cao_25-43-6_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Charlemagne_14-18-42_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 3</div>
              <img src="images/talents/Charles_24-25-25_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">2 / 3</div>
              <img src="images/talents/Charles_31-21-22_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">3 / 3</div>
              <img src="images/talents/Charles_41-0-33_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Cleopatra_VII_10-42-22_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Constantine_I_31-25-18_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Edward_45-0-29_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/El_Cid_48-0-25_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Frederick_I_12-18-44_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Genghis_Khan_32-0-42_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Guan_Yu_31-18-25_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Hannibal_28-18-28_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Ishida_10-42-22_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Julius_Caesar_28-18-28_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Leonidas_I_30-0-44_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Mehmed_II_14-18-42_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Minamoto_42-0-32_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Ramesses_II_47-0-27_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Richard_I_30-0-44_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Saladin_32-18-24_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Seondeok_17-42-15_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Takeda_30-0-44_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Tomyris_45-0-29_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Wu-Zetian-_18-25-31_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Yi-Seong-Gye-_32-0-42_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Baibars_42-7-25_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Belisarius_25-43-6_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Boudica_10-40-24_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Eulji_47-0-27_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Hermann_48-0-26_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Joan_of_Arc_10-42-22_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Keira_0-42-32_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Kusunoki_40-18-16_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Lohar_0-43-31_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Osman_I_32-0-42_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Pelagius_42-0-32_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Scipio_50-6-18_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <div class="mySlides">
              <div class="imageNumber">1 / 1</div>
              <img src="images/talents/Sun_Tzu_7-25-42_.svg" />
              <div class="captionText">Caption Text 4</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
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
    <script src="js/slideshow.js"></script>
  </body>
</html>
