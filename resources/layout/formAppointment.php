<?php

echo '<pre>', var_dump($_SESSION), '</pre>';
echo '<pre>', var_dump($_POST), '</pre>';

if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
  $iframe = '';
  $action = '/SpDesign/resources/database/authenticate.php';
  $formHeader = 'Vereinbare einen Termin';
  $signUpText = '';
  $logInput = '';
  $captchaImage = '';
  $captcha = '';
  $btnText = "Anfrage senden";
} else {
  $iframe = '';
  // $iframe = '          
  // <iframe <iframe
  // src="https://www.google.com/maps/embed?pb=!4v1704548521358!6m8!1m7!1sgkHIUjG5V_hBg6B7fWr3EQ!2m2!1d53.55310773670471!2d9.993314394261816!3f49.600707567048!4f-2.1924818786369826!5f1.0697609978093234"
  // width="100%" height="550px" frameborder="0" style="border:0;" allowfullscreen="">
  // </iframe>';
  $action = '/SpDesign/resources/database/authenticate.php';
  $formHeader = 'Login & Termin vereinbaren';
  $signUpText = '
  <br><b style="color: #FF565B">Need an account?</b> <u><a href="/SpDesign/signUp.php">Sign
  up</a></u>
  ';
  $logInput = '
  <div class="col-lg-6">
  <input name="user" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required=""
  value="susan@gmail.com">
  </div>
  
  <div class="col-lg-6">
  <input name="pass" type="password" id="pw" placeholder="Password*" required="" value="pw1">
  </div>
  ';
  $captchaImage = '
  <div class="service-item">
                    <img src="/SpDesign/resources/captcha/captcha.php">
                  </div>
  ';
  $captcha = '
  <input name="eingabe" type="text" id="captcha" placeholder="Captcha*" required="">
  ';
  $btnText = '
  einloggen und Anfrage senden
  ';
}
?>


<section>
  <div class="container expanded">
    <div class="row">
      <div class="col-lg-12">
        <div id="map">
          <?= $iframe ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-us-page">
  <div class="container">
    <div class="col-lg-12">
      <div class="contact-page-form">
        <div class="row">
          <div class="col-lg-12 align-self-center">
            <form id="contact" action="<?= $action ?>" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h2>
                      <?= $formHeader ?>
                    </h2>
                    <h5>
                      <?php
                      if (isset($_SESSION["login"]) && !is_bool($_SESSION["login"])) {
                        echo "<center><b style='color: #FF565B'>Falsche Zugangsdaten eingegeben!</b></center>";
                      }
                      ?>
                    </h5>
                    <?= $signUpText ?>
                  </div>
                </div>
                <?= $logInput ?>

                <div class="col-lg-12 date">
                  <?= $captchaImage ?>

                  <?php
                  include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/date.php");
                  ?>
                </div>

                <div class="col-lg-12">
                  <?= $captcha ?>
                </div>

                <div class="col-lg-12">
                  <button type="submit" id="form-submit" class="main-button ">
                    <?= $btnText ?>
                  </button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>