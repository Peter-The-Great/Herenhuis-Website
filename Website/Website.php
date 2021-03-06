<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="Huis foto's/logo.png">
    <script src="https://kit.fontawesome.com/24c24daece.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Huis.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <title>Henry Petersons</title>
</head>
<body>
    <nav>
        <!-- Dit is een navbar bestaat uit. -->
        <div class="nav">
            <div class="container">
                <ul>
                    <li id="pad"><a href="Website.html"><i class="fas fa-home"></i> Home</a></li>
                    <li id="pad"><a href="Bidsysteem/Account/Account.html"><i class="far fa-user-circle"></i> Account</a></li>
                </ul>
                <div id="Statement"><a href="Website.html"><img alt="Peterson-logo" style="max-height: 80px; position: relative; top: 2px;" class="img-fluid" src="Huis foto's\logo.png"></a>
                <span id="statement">Wij verkopen Herenhuizen</span></div>
            </div>
        </div>
        <div class="breadcrums">
            <div class="container">
              <p><a href="Website.html">Home</a> > <a href="https://www.denhaag.nl/nl.htm" target="_blank">Den Haag</a> > <a href="https://denhaag.com/nl/locatie/9590/lange-voorhout" target="_blank">Lange Voorhout</p></a>
            </div>
        </div>
    </nav>
    <header class="header-object">
        <div class="container">
            <div class="header-object_details">
                <h1 class="header-object__adres" id="adress">Lange Voorhout 67</h1><span
                    class="adress-stad-postcode">2354
                    DK Den Haag</span>
                <div  class="header-Pricing-House">Bieden: Zie Omschrijving</div>
            </div>
            <div class="share-menu-object">
                <button class="share-menu__dropdown-share-button">Delen <i class="fas fa-angle-down"></i>
                </button>
                <div class="share-dropdown-content">
                        <a href="https://www.facebook.com/"  target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>
                        <a href="https://twitter.com/HenryPe80777856"  target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest"></i> Pinterest</a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
            </div>
          </header>
          <nav>
            <div class="nav-right">
              <div class="container">
                   <div class="Customer-Prijzen">
                   <h2>Bied prijzen:</h2>
                   <p>Minimum prijs:</p>

                  <!--PHP Bod info--> <!-- <3-->

                  <?php
    $servername = "localhost";
    $database = "80781_beroeps";
    $username = "80781";
    $password = "Qu1p3*v6";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
        ?>

        <?php
  $sql= "SELECT `bod` FROM `BID` ORDER BY `bod` DESC LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $antwoord = mysqli_fetch_array($result);
  
  /*if (!$conn -> query($sql)) {
    echo("Error description: " . $conn -> error);
  }
  else {echo $sql;}*/
  
  $minbid = ($antwoord['bod'] + 10000);
  //echo "<p>$minbid</p>";
  
      ?>

<!--  -->
<!--nvm staat hieronder -->
                  </div>
                  <hr><?php
  $sql= "SELECT `Voornaam`, `date`, `bod` FROM `BID` ORDER BY bod DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)  > 0 ) {
    
    echo "<table>";
    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
        echo "<td style='color: #8b288f;'>".$row["Voornaam"]."</td>" . "<td style='padding-left: 10px; color: #333;'>" . $row["bod"]. "</td>" . "<td style='padding-left: 10px; color: blanchedalmond;'>" . $row["date"] . "</td>";
    echo "</tr>";
    }
      //Close table
    echo "</table>";
} else {
    echo "0 results";
}
sort($row["bod"]);
  
      ?><hr><!-- Einde PHP aanbod -->
                  <a href="Bidsysteem/Bidding.html"><input id="submit-button" type="submit" value="Versturen" name="verzenden" /></a>
              </div>
            </div>
          </nav>
            <section class="section-object1-media">
            <div class="row" id="bottom-picture">
                    <img src="Huis foto's\01.jpg" class="img-fluid rounded" width="500px" height="320px" style="cursor: pointer;" onclick="openModal();currentSlide(1);">
                    <img src="Huis foto's\10.jpg" class="img-fluid rounded" width="500px" height="320px" style="cursor: pointer;" onclick="openModal();currentSlide(10);">
                    <img src="Huis foto's\22.jpg" class="img-fluid rounded" width="500px" height="320px" style="cursor: pointer;" onclick="openModal();currentSlide(22);">
                    <img src="Huis foto's\28.jpg" class="img-fluid rounded" width="500px" height="320px" style="margin-top: 10px; cursor: pointer;" onclick="openModal();currentSlide(28);">
                    <img src="Huis foto's\39.jpg" class="img-fluid rounded" width="500px" height="320px" style="margin-top: 10px; cursor: pointer;" onclick="openModal();currentSlide(39);">
            </div>
            <div class="text-for-Pictures">
              <h6>Foto Volgorde</h6>
              <p>1: Begaande grond 1 t/m 9.<br>2: Eerste verdieping 10 t/m 21.<br> 3: Tweede verdieping 22 t/m 27.<br> 4: Derde verdieping 28 t/m 38.<br> 5: Vierde verdieping 39 t/m 41</p>
            </div>
            <br>
            <div id="myModal" class="modal">
                    <span id="fadeout" class="close cursor" onclick="closeModal();">&times;</span>
                    <div class="modal-content">

                      <div class="mySlides">
                        <div class="numbertext">1 / 41 <h4>De Wachtruimte (Begaande grond)</h4></div>
                        <img src="Huis foto's\01.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">2 / 41 <h4>De Wachtruimte 2</h4></div>
                        <img src="Huis foto's\02.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">3 / 41 <h4>De Keuken</h4></div>
                        <img src="Huis foto's\03.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">4 / 41 <h4>De Keuken 2</h4></div>
                        <img src="Huis foto's\04.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">5 / 41 <h4>De Keuken 3</h4></div>
                        <img src="Huis foto's\05.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">6 / 41 <h4>De keuken 4</h4></div>
                        <img src="Huis foto's\06.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">7 / 41 <h4>Achterkant huis</h4></div>
                        <img src="Huis foto's\07.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">8 / 41 <h4>De Tuin</h4></div>
                        <img src="Huis foto's\08.jpg" style="width: 100%">
                      </div>

                      <div id="WC" class="mySlides">
                        <div class="numbertext">9 / 41 <h4>WC</h4></div>
                        <img src="Huis foto's\09.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">10 / 41 <h4>De woonkamer (Verdieping 1)</h4></div>
                        <img src="Huis foto's\10.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">11 / 41 <h4>De woonkamer met Mooie achtergrond</h4></div>
                        <img src="Huis foto's\11.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">12 / 41 <h4>De woonkamer bestek en glazen kast</h4></div>
                        <img src="Huis foto's\12.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">13 / 41 <h4>De Eet tafel</h4></div>
                        <img src="Huis foto's\13.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">14 / 41 <h4>De Eet tafel 2</h4></div>
                        <img src="Huis foto's\14.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">15 / 41 <h4>De woonkamer Kachel</h4></div>
                        <img src="Huis foto's\15.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">16 / 41 <h4>Eet tafel met deuren open</h4></div>
                        <img src="Huis foto's\16.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext" style="color: black">17 / 41 <h4>Balkon</h4></div>
                        <img src="Huis foto's\17.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">18 / 41 <h4>De zijkamer</h4></div>
                        <img src="Huis foto's\18.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">19 / 41 <h4>De zijkamer met uitzicht </h4></div>
                        <img src="Huis foto's\19.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">20 / 41 <h4>De zijkamer met boekenkast</h4></div>
                        <img src="Huis foto's\20.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">21 / 41 <h4>De zijkamer met kachel</h4></div>
                        <img src="Huis foto's\21.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">22 / 41 <h4>De slaapkamer (Verdieping 2)</h4></div>
                        <img src="Huis foto's\22.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">23 / 41 <h4>De slaapkamer 2</h4></div>
                        <img src="Huis foto's\23.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">24 / 41 <h4>De slaapkamer 3</h4></div>
                        <img src="Huis foto's\24.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">25 / 41 <h4>De badkamer</h4></div>
                        <img src="Huis foto's\25.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">26 / 41 <h4>De douche</h4></div>
                        <img src="Huis foto's\26.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">27 / 41 <h4>De badkamer 2</h4></div>
                        <img src="Huis foto's\27.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">28 / 41 <h4>De trap (Verdieping 3)</h4></div>
                        <img src="Huis foto's\28.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">29 / 41 <h4>De boven slaapkamer</h4></div>
                        <img src="Huis foto's\29.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">30 / 41 <h4>De boven slaapkamer 2</h4></div>
                        <img src="Huis foto's\30.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">31 / 41 <h4>De boven slaapkamer 3</h4></div>
                        <img src="Huis foto's\31.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">32 / 41 <h4>De boven slaapkamer 4</h4></div>
                        <img src="Huis foto's\32.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">33 / 41 <h4>De boven slaapkamer met kast</h4></div>
                        <img src="Huis foto's\33.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">34 / 41 <h4>De trap naar de zolder</h4></div>
                        <img src="Huis foto's\34.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">35 / 41 <h4>De derde verdieping</h4></div>
                        <img src="Huis foto's\35.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">36 / 41 <h4>De badkamer op de derde verdieping</h4></div>
                        <img src="Huis foto's\36.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">37 / 41 <h4>De badkamer op de derde verdieping 2</h4></div>
                        <img src="Huis foto's\37.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">38 / 41 <h4>De boven douche</h4></div>
                        <img src="Huis foto's\38.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">39 / 41 <h4>De zolder slaapkamer (Verdieping 4/Zolder)</h4></div>
                        <img src="Huis foto's\39.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">40 / 41 <h4>De zolder slaapkamer met portret</h4></div>
                        <img src="Huis foto's\40.jpg" style="width: 100%">
                      </div>

                      <div class="mySlides">
                        <div class="numbertext">41 / 41 <h4>De zolder slaap kamer 2. (Einde tour)</h4></div>
                        <img src="Huis foto's\41.jpg" style="width: 100%">
                      </div>

                      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                      <a class="next" onclick="plusSlides(1)">&#10095;</a>

                      <!--<a class="up" onclick="plusSlides(-1)">&#8679;</a>
                      <a class="down" onclick="plusSlides(1)">&#8681;</a>-->

                  </div>
                  </div>
           </div>
          </section>
          <!-- Hier zit het tussen balk systeem in voor als gebruikers een manier willen hebben om alles overzichtelijk te vinden. -->
          <center><div class="object-media-teasers-foto-plattegrond-video" data-object-media-teasers="">
            <a id="fotos" onclick="openModal();currentSlide(1);" data-media-viewer-overlay="foto-1" data-interaction-click="" data-interaction="Object.Fotos">
                <i class="fas fa-image"></i>
                Foto's 41</a>
                            <a href="plattegrond/Herenhuis_plattegrond.html" data-media-viewer-overlay="plattegrond" data-interaction-click="" data-interaction="Object.Plattegrond" target="_blank">
                                <i class="fas fa-layer-group"></i>
                Plattegrond
            </a>
                            <a id="kaartje" href="https://www.google.com/maps/place/Lange+Voorhout+67,+2514+EH+Den+Haag/@52.083254,4.314248,17z/data=!4m5!3m4!1s0x47c5b73b8278e9a7:0x895c5ba20c05c044!8m2!3d52.0832536!4d4.3142485?hl=en" class="object-media-teaser-kaart" data-media-viewer-overlay="kaart" target="_blank">
                                <i class="fas fa-map-marked-alt"></i> Kaart
            </a>
    </div></center>
    <br>
          <section class="house-description">
                <h2 class="house-description-title">Omschrijving</h2>
                <div class="object-description-body">
            <p>Bij dit huis komt er een bod systeem waarbij gebruikers kunnen bieden voor de hoogste prijs. Degene die het grootste bied krijgt het huis.<br><br>
            Mooi huis, helemaal in het centrum van Den Haag en je buurman is het Escher Museum, u kunt er maar niet genoeg van krijgen. Het nieuwe huis op Lange Voorhout, is een modern, maar ook antiek huis. Waar de manier van leven bloeidt.</p><br>

            <h3>Plattegrond informatie</h3>

            <h5>Begane grond.</h5>
            Entreehal met veel ruimte,<br>
            Toegang tot de tuin,<br>
            Veel kasten voor opslagruimte,<br>
            1 Toilet,<br>
            Woonkeuken<br>
            -Met koelkasten en gasfornuizen,<br><br>
            <p>Trappenhuis met toegang tot de 1e Verdieping.</p><br>

            <h5>1e Verdieping.</h5>
            Voorkamer,<br>
            Paar kasten voor opslagruimte,<br>
            Woonkamer<br>
            -Met toegang naar de Balkon,<br><br>
            <p>Trappenhuis met toegang tot de Begane grond en 2e Verdieping.</p><br>

            <h5>2e Verdieping.</h5>
            Woonkamer,<br>
            Volledige badkamer<br>
            -Toilet bad en instap douche,<br>
            Slaapkamer met veel ruimte<br>
            -Paar kasten voor opslagruimte,<br><br>
            <p>Trappenhuis met toegang tot de 1e Verdieping en 3e Verdieping.</p><br>

            <h5>3e Verdieping</h5>
            Zolder<br>
            -Paar kasten voor opslagruimte,<br>
            2 Slaapkamers<br>
            -1 met kast,<br>
            Volledige badkamer<br>
            -Toilet en instap douche,<br><br>
            <p>Trappenhuis met toegang tot de 2e Verdieping en 4e Verdieping.</p><br>

            <h5>4e Verdieping</h5>
            Slaapkamer met veel ruimte,<br><br>
            <p>Trappenhuis met toegang tot de 3e Verdieping.</p><br>

                </div>
            </section>
            <div class="contact-gegevens">
            <h2 class="contact-gegevens-h">Neem Contact met Ons</h2>
                <div class="contact-gegevens-body">
                  Henry Petersons.<br>

                  <a class="contact-link" href="tel:+31642899748">Telefoon-Nummer:(31+)6-42-89-97-48.</a><br>

                  <a class="contact-link" href="mailto:84669@glr.nl">Henrypetersons@gmail.com</a><br>

                  Rotterdam koekamp <br>

                  BTW Nummer: NL666999B69. </div>
              </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1228.710958813499!2d4.31398454078209!3d52.08318879612612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b73b8278e9a7%3A0x895c5ba20c05c044!2sLange%20Voorhout%2067%2C%202514%20EH%20Den%20Haag!5e0!3m2!1sen!2snl!4v1575281866884!5m2!1sen!2snl" id="google-maps" frameborder="1" allowfullscreen="1"></iframe>

            <footer class="Footer-Object">
                <div id="Statement"><a href="Website.html"><img alt="Peterson-logo" style="max-height: 100px;" class="img-fluid" src="Huis foto's\logo.png"></a>
                    <div class="footer-nav"><ul>
                            <li class="footer-nav"><a href="Extra/Over-Ons.html">Over Ons</a></li>
                            <li class="footer-nav"><a href="mailto:84669@glr.nl">Contact (Email)</a></li>
                        </ul>
                    </div>
                </footer>
                <script src="Script.js">
                </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
