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
  <link href="/SpDesign/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="/SpDesign/assets/css/fontawesome.css">
  <!-- <link rel="stylesheet" href="/SpDesign/assets/css/templatemo-572-designer.css"> -->
  <link rel="stylesheet" type='text/css' href="/SpDesign/assets/css/style.php?bgImage='<?= $bgImage ?>'">
  <link rel="stylesheet" href="/SpDesign/assets/css/owl.css">
  <link rel="stylesheet" href="/SpDesign/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

-->
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
            <h6>We Provide Everything</h6>
            <h2><em>Interior</em> Designer</h2>
            <div class="white-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/SpDesign/vendor/jquery/jquery.min.js"></script>
  <script src="/SpDesign/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="/SpDesign/assets/js/isotope.min.js"></script>
  <script src="/SpDesign/assets/js/owl-carousel.js"></script>

  <script src="/SpDesign/assets/js/tabs.js"></script>
  <script src="/SpDesign/assets/js/popup.js"></script>
  <script src="/SpDesign/assets/js/custom.js"></script>
  <script>
    setTimeout(function () {
      $('.loader').fadeToggle();
    }, 1500);

    $("a[href='#top']").click(function () {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
  </script>