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
                <a class="nav-link active" href="grpservices.php">Group Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
      </nav>
    </header>

    <div class="container-fluid p-0">
      <div id="color-accessibility">
        <div class="group-image">
          <main>
            <div class="mission-h1 mx-auto">
              <h1 class=""></h1>
              </div>
          </main>
        </div > <!-- end .home-image -->
      </div> <!-- end .color-accessibility -->

      <div class="body-container">
        <div class="body-text">

      <!-- GROUP THERAPY PAGE MAIN SECTION -->
      <div>
        <h2>Group Therapy</h2>
          <div class="servicespage-container">

            <div class="cosmetic mx-auto row">
              <!-- <div class="text-center  col-lg-6 col-md-6 col-sm-12">
                <img src="images/mom-daughter.jpg" class="img-fluid" alt="Cosmetic Dentistry" width="300" title="Cosmetic Dentistry">
              </div> -->
              <div class="text-center col-lg-12 col-md-6 col-sm-12">

                <br>
                <p>More Information Coming Soon...</p>
                <br><br><br>
              </div>
            </div> <!-- end .cosmetic-->

            <!-- <div class="whitening mx-auto row">
              <div class="text-center col-lg-6 col-md-6 col-sm-12">
                <img src="images/happy-girl.jpg" class="img-fluid" alt="Teeth Whitening" width="300" title="Teeth Whitening">
              </div>
              <div class="text-center col-lg-6 col-md-6 col-sm-12">
                <h3></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>  -->
            <!-- end .whitening -->

            <!-- <div class="implants mx-auto row">
              <div class="text-center col-lg-6 col-md-6 col-sm-12">
                <img src="images/woman-chair.jpg" class="img-fluid" alt="Dental Implants" width="300" title="Dental Implants">
              </div>
              <div class="text-center col-lg-6 col-md-6 col-sm-12">
                <h3></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>  -->
            <!-- end .implants -->

          </div> <!-- end .servicespage-container -->
      </div> <!-- end team section -->

      <div class="fees text-center mx-auto">
      <button class="btn bg-danger text-white"><a class="whitelink" href="contact.php#feestarget">Click here for Fees</a></button>
      <br><br><br>
      </div>

    </div> <!-- end .body-text -->
  </div> <!-- end .body-container -->
  <!-- container-fluid ends in footer template file -->


  <?php
  // IMPORT REQUIRED FOOTER FILE
  require 'templates/footer.html.php';
  ?>
