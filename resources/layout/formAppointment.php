<?php
// echo '<pre>', var_dump($_SESSION), '</pre>';


if (isset($_SESSION["login"]) && is_bool($_SESSION["login"])) {
  // echo " href='logout.php'> Logout";
  ?>


  <section>
    <div class="container expanded">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <!--          <iframe <iframe
              src="https://www.google.com/maps/embed?pb=!4v1704548521358!6m8!1m7!1sgkHIUjG5V_hBg6B7fWr3EQ!2m2!1d53.55310773670471!2d9.993314394261816!3f49.600707567048!4f-2.1924818786369826!5f1.0697609978093234"
              width="100%" height="550px" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
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
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="section-heading">
                      <h2>Vereinbare einen Termin</h2> </u>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message"
                      required=""></textarea>
                  </div>
                  <div class="col-lg-12 date">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/date.php");
                    ?>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <?php

} else {
  // echo "href='login.php'> Login";
  ?>
  <section>
    <div class="container expanded">
      <div class="row">
        <div class="col-lg-12">
          <div id="map">
            <iframe <iframe
              src="https://www.google.com/maps/embed?pb=!4v1704548521358!6m8!1m7!1sgkHIUjG5V_hBg6B7fWr3EQ!2m2!1d53.55310773670471!2d9.993314394261816!3f49.600707567048!4f-2.1924818786369826!5f1.0697609978093234"
              width="100%" height="550px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="section-heading">
                      <h2>Vereinbare einen Termin</h2> <br><b style="color: #FF565B">Need an account?</b> <u><a
                          href="/SpDesign/signUp.php">Sign
                          up</a></u>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <input name="first-name" type="text" id="first-name" placeholder="Username*" required="">
                  </div>
                  <div class="col-lg-6">
                    <input name="pw" type="password" id="pw" placeholder="Password*" required="">
                  </div>

                  <div class="col-lg-12">
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="Message"
                      required=""></textarea>
                  </div>
                  <div class="col-lg-12 date">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . "/SpDesign/resources/layout/date.php");
                    ?>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
}
?>