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
                <a class="nav-link active" href="about.php">About</a>
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
        <div class="about-image">
          <main>
            <div class="mission-h1 mx-auto">
              <h1 class=""></h1>
              </div>
          </main>
        </div > <!-- end .home-image -->
      </div> <!-- end .color-accessibility -->

      <div class="body-container">
        <div class="body-text">

      <!-- ABOUT SECTION -->
      <div>
        <h2>About Me</h2>
          <div class="about-container">

            <div class="aboutus1 text-center mx-auto col-lg-6 col-md-8 col-sm-12">
              <!-- <h3></h3> -->
              <p>I am a graduate from the Spiritual Psychotherapy Program at the College of Transformational Arts and Spiritual Psychotherapy in Toronto Ontario. I practice humanistic, transpersonal and spiritual psychotherapy.</p>
              <p>I am a Mother of two amazing children who inspire me everyday. I see client's in my home office in Richmond Hill Ontario. I have previous experience in caring for children for 16 years and also  7 years of helping others improve their physical health through personal fitness training prior to attaining my Masters Level in Psychotherapy. </p>
              <p>I am extremely passionate about the work I have chosen to do in this field. I feel a great deal of gratitude that I may be in a position to assist my client's in connecting with their true selves and healing the disconnect they may be feeling within themselves. It is my honour and privilege to hold space for you while you delve into this beautiful healing personal work and guide you where it fits to do so.</p>
              <br>
              <p class="largertext">Shelley Whitehouse</p>

              <!-- ADD FAMILY IMAGE -->

            </div> <!-- end .aboutus1 -->


          </div> <!-- end .about-container -->
      </div> <!-- end -->

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
