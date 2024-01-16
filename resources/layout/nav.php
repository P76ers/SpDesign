<nav class="main-navigation navbar navbar-expand-lg navbar-light">
  <div class="container">
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
          <a class="<?= urlIs("/SpDesign/kontakt.php") ? "nav-link active" : "nav-link" ?>"
            href="kontakt.php">Kontakt</a>
        </li>

        <?php
        if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
          ?>
          <li class="nav-item">
            <a class="<?= urlIs("/SpDesign/services.php") ? "nav-link active" : "nav-link" ?>" href="services.php">Mein
              Konto</a>
          </li>
          <?php
        }
        ?>

        <li class="nav-item">
          <a <?php
          if (urlIs("/SpDesign/login.php") || urlIs("/SpDesign/signUp.php")) {
            echo "class='nav-link active' ";
          } else {
            echo "class='nav-link'";
          }
          if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
            echo " href='/SpDesign/resources/database/logout.php'> Logout";
          } else {
            echo "href='/SpDesign/login.php'> Login";
          }
          ?> </a>
        </li>
      </ul>
    </div>
  </div>
</nav>