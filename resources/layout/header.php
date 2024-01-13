<!DOCTYPE html>
<html lang="de">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">

  <title>
    <?= "S&P | " . $title ?>
  </title>

  <!-- Bootstrap core CSS -->
  <link href="/SpDesign/resources/layout/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="/SpDesign/resources/layout/css/fontawesome.css">
  <link rel="stylesheet" type='text/css' href="/SpDesign/resources/layout/css/style.php?bgImage='<?= $bgImage ?>'">
  <link rel="stylesheet" href="/SpDesign/resources/layout/css/owl.css">
  <link rel="stylesheet" href="/SpDesign/resources/layout/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="/SpDesign/resources/layout/css/date.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css" />

</head>

<body>

  <div class="loader">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px" y="0px" width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;"
      xml:space="preserve">
      <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s"
          repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s"
          repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s"
          repeatCount="indefinite" />
      </rect>
      <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s"
          repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s"
          repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s"
          repeatCount="indefinite" />
      </rect>
      <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s"
          repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s"
          repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s"
          repeatCount="indefinite" />
      </rect>
    </svg>
  </div>

  <header id="#top">

    <?php
    include("nav.php");

    ?>

  </header>

  <div class="main-banner change-name">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <img class="logo" src="/SpDesign/resources/images/spLogo.png" alt="SpLogo">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>