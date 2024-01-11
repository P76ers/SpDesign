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
                    <h2>LogIn
                      <?php
                      if (isset($_SESSION["login"]) == "falsches Passwort!") {
                        echo "<center><b style='color: #FF565B'>Falsche Zugangsdaten eingegeben!</b></center>";
                      }
                      ?>
                    </h2>
                    <br><b style="color: #FF565B">Need an account?</b> <u><a href="/SpDesign/signUp.php">Sign
                        up</a></u>
                  </div>
                </div>

                <div class="col-lg-6">
                  <input name="user" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required=""
                    value="susan@gmail.com">
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