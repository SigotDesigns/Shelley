<!-- REQUIRED HEADER PHP FILE -->
<?php
require_once 'includes/db-connect.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php echo $description ?>">
  <meta name="keywords" content="<?php echo $keywords ?>">
  <meta name="author" content="Jaya Sigot">

  <!-- FONTS CDN -->
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> -->
  <!-- BOOTSTRAP CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <!-- Animate stylesheet CDN -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> -->
  <!-- Bootstrap SCSS and custom SCSS compiled as one minified file -->
  <link rel="stylesheet" href="css/main.min.css">
  <title><?php echo $title ?></title>
  <!-- RECAPTCHA CDN FOR CONTACT FORM -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
  <div class="content-wrapper">
