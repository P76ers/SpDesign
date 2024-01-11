<section>
  <div class="container expanded">
    <div class="row">
      <div class="col-lg-12">
        <div id="map">
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

            <form id="contact" action="authenticate.php" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h2>LogIn</h2> <br><b style="color: #FF565B">Need an account?</b> <u><a
                        href="/SpDesign/signUp.php">Sign
                        up</a></u>
                  </div>
                </div>

                <div class="col-lg-6">
                  <input name="user" type="text" id="first-name" placeholder="Username*" required="" value="Susan">
                </div>
                <div class="col-lg-6">
                  <input name="pass" type="password" id="pw" placeholder="Password*" required="" value="pw1">
                </div>

                <div class="col-lg-12 date">
                  <div class="service-item">
                    <img src="/SpDesign/resources/captcha/captcha.php">
                  </div>
                </div>

                <div class="col-lg-12">
                  <input name="eingabe" type="text" id="captcha" placeholder="Captcha*" required="">
                </div>

                <?php
                echo '<pre>', var_dump($_SESSION), '</pre>';
                echo '<pre>', var_dump($_POST), '</pre>';

                if (isset($_SESSION["login"]) == "falsches Passwort!") {
                  echo "<b>Falsche Zugangsdaten eingegeben!</b>";

                }
                ?>

                <div class="col-lg-12">
                  <button type="submit" id="form-submit" class="main-button ">LogIn</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>