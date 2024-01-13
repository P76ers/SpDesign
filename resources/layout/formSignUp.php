<?php
// echo '<pre>', var_dump($_SESSION), '</pre>';
// echo '<pre>', var_dump($_POST), '</pre>';
?>
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
            <form id="contact" action="/SpDesign/resources/database/addUser.php" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading">
                    <h2>SignUp</h2>
                    <h5>
                      <?php
                      if (isset($_SESSION["error"]) && $_SESSION["error"] == "user") {
                        echo "<center><b style='color: #FF565B'>User bereits vorhanden!</b></center>";
                      } else if (isset($_SESSION["error"]) && $_SESSION["error"] == "captcha") {
                        echo "<center><b style='color: #FF565B'>Captcha falsch eingegeben!</b></center>";
                      } else if (isset($_SESSION["error"]) && $_SESSION["error"] == "UserCaptcha") {
                        echo "<center><b style='color: #FF565B'>User vorhanden & Captcha falsch eingegeben!</b></center>";
                      }
                      ?>
                    </h5>
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