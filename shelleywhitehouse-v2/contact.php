<?php
// VARIABLES USED FOR META AND TITLE TAGS
$title = 'Shelley Whitehouse';
$description = 'Shelley Whitehouse is a psychotherapist.';
$keywords = 'Shelley Whitehouse, psychotherapy';

// IMPORT REQUIRED HEADER FILE
require 'templates/header.html.php';
?>

    <header>
      <nav class="navbar p-0 navbar-expand-lg">
        <a class="navbar-brand logo" href="index.php"><img src="images/logo.png" alt="Shelley Whitehouse Logo" height="90" title="Shelley Whitehouse Logo"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Psychotherapy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indservices.php">Individual Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="grpservices.php">Group Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
      </nav>
    </header>

    <div class="container-fluid p-0">
      <div id="color-accessibility">
        <div class="contact-image">
          <main>
            <div class="mission-h1 mx-auto">
              <h1 class=""></h1>
              </div>
          </main>
        </div > <!-- end .home-image -->
      </div> <!-- end .color-accessibility -->

      <div class="body-container">
        <div class="body-text">

      <!-- CONTACT SECTION -->
      <div>
        <!-- <img src="images/contact.jpg" class="img-fluid mx-auto" alt="Contact Me" height="" width="2000" title="Contact Me"> -->

        <!-- FEES SECTION -->
        <div id="feestarget">
          <h2>My Fees</h2>
            <div class="">
              <div class="text-center mx-auto col-lg-6 col-md-8 col-sm-12">
                <h3>$75 for a 50 minute session (Including HST).</h3>
                <p>Fees will be eligible for health insurance/benefits plans in early Fall 2018.</p>
                <!-- COMMENT IN FOR FUTURE USE -->
                <!-- <h3>$130 for a 50 minute session (Including HST).  Fees are elibable for health insurance.</h3>
                <p>Fees are eligible for health insurance/benefits plans.</p> -->
                <p>Methods of payment: cash, cheque or e-transfer.</p>
              </div> <!-- end .aboutus1 -->
            </div> <!-- end .about-container -->
        </div> <!-- end -->

        <h2>Contact Form <br> (416) 562-5542</h2>
          <div class="contact-container">
            <div class="contact1 text-center col-lg-4 col-md-6 col-sm-12">
              <h3>Book an appointment today to learn more about my services</h3>
              <div class="name-form">
                <form action="includes/process-phpmailer-gmail.inc.php" method="post">
                  <div>
                    <label for="name">NAME: </label><br>
                    <input class="form-control" name="name" value="" id="name" ></input>
                  </div>
                  <div>
                    <label for="email">EMAIL: </label><br>
                    <input class="form-control" name="email" value="" id="email"></input>
                  </div>
                  <div>
                    <label for="phone">PHONE: </label><br>
                    <input class="form-control" name="phone" value="" id="phone"></input>
                  </div>
                  <div>
                    <label for="message">MESSAGE: </label><br>
                    <textarea class="form-control" name="message" id="message" rows="10" placeholder="Type your message here"></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LdVFlUUAAAAAC7Mz_Zdi1qN0LnkBBs2BO3ikEj3">
                  </div>
                  <button type="submit" class="btn bg-secondary text-white" name="button">Submit</button>
                </form>

              </div> <!-- end. name-form -->
            </div> <!-- end .contact1-->

            <div class="findus">
              <h2>Find Me</h2>
                <div class="findus-container row">
                  <div class="findus-map text-center col-xl-6 col-lg-12 col-md-12 col-sm-12 pb-5 pb-md-0">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2873.041532969733!2d-79.44595892433283!3d43.93781409508551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882ad5b9c1b72823%3A0x1aab3cc2060ef12b!2s4+Trish+Dr%2C+Richmond+Hill%2C+ON+L4E+5C5!5e0!3m2!1sen!2sca!4v1532634401127" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div> <!-- end. findus-map -->
                  <div class="findus-ceo align-self-center col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-center largertext">Shelley Whitehouse</h3>
                      <p class="text-center">4 Trish Drive, Richmond Hill, Ontario, L4E 5C5 <br>
                      </p>
                      <p class="text-center">TEL: 416-562-5542 <br>
                      </p>
                      <p class="text-center">EMAIL: <a href="mailto:shelleywhitehouse1@gmail.com">shelleywhitehouse1@gmail.com</a></p>

                  </div> <!-- end. findus-ceo -->
                </div> <!-- end .findus-container -->
            </div> <!-- end .findus -->

          </div> <!-- end .contact-container -->

      </div> <!-- end .row -->
      </div> <!-- end .body-text -->
    </div> <!-- end .body-container -->
  <!-- container-fluid ends in footer template file -->

  <?php
  // IMPORT REQUIRED FOOTER FILE
  require 'templates/footer.html.php';
  ?>
