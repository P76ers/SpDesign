<nav class="main-navigation navbar navbar-expand-lg navbar-light">
  <div class="container">
    <!-- <a class="navbar-brand" href="index.html"><img src="/SpDesign/resources/images/spLogo.png" alt="SpLogo"
        height="30px"></a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="<?= urlIs("/SpDesign/index.php") ? "nav-link active" : "nav-link" ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="<?= urlIs("/SpDesign/produkte.php") ? "nav-link active" : "nav-link" ?>"
            href="produkte.php">Produkte</a>
        </li>
        <li class="nav-item">
          <a class="<?= urlIs("/SpDesign/services.php") ? "nav-link active" : "nav-link" ?>"
            href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="<?= urlIs("/SpDesign/kontakt.php") ? "nav-link active" : "nav-link" ?>"
            href="kontakt.php">Kontakt</a>
        </li>
        <li class="nav-item">
          <a <?php
          if (urlIs("/SpDesign/login.php") || urlIs("/SpDesign/member.php") || urlIs("/SpDesign/signUp.php")) {
            echo "class='nav-link active' ";
          } else {
            echo "class='nav-link'";
          }
          if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
            echo " href='logout.php'> Logout";
          } else {
            echo "href='login.php'> Login";
          }
          ?> </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
// echo '<pre>', var_dump($_SESSION), '</pre>';


?>