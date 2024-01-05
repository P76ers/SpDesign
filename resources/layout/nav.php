<nav class="main-navigation navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="/SpDesign/resources/images/white-logo.png" alt=""></a>
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
          <a class="<?= urlIs("/SpDesign/kontakt.php") ? "nav-link active" : "nav-link" ?>" href="kontakt.php">Kontakt
            Us</a>
        </li>
        <li class="nav-item">
          <a class="<?= urlIs("/SpDesign/login.php") ? "nav-link active" : "nav-link" ?>" href="
              login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>