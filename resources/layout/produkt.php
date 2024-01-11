<?php
$con = dbConnect();

$sql = "SELECT Kategoriename, Image, Kategoriebeschreibung 
          FROM artikelkategorien
          ";

$result = mysqli_query($con, $sql);

$i = 0;
while ($zeile = mysqli_fetch_assoc($result)) {
  foreach ($zeile as $key => $value) {
    $arr[$i][$key] = $value;
  }
  $i++;
}
?>
<section class="trending-page">
  <div class="container expanded">
    <div class="col-lg-12">
      <div class="row grid" style="position: relative; height: 1395.31px">
        <div class="grid-sizer"></div>
        <div class="grid-item" style="position: absolute; left: 0px; top: 0px">
          <div class="trending-item">
            <div class="thumb">
              <span class="banner">
                <?= $arr[0]["Kategoriename"] ?>
              </span>
              <div class="hover-effect">
                <div class="inner-content">
                  <a href="produkte.php">
                    <h4>
                      <?= $arr[0]["Kategoriebeschreibung"] ?>
                    </h4>
                  </a>
                  <a class="icon" href="produkte.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                      fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a>
                </div>
              </div>
              <img src="/SpDesign/resources/images/kategorien/<?= $arr[0]["Image"] ?>" alt="" />
            </div>
          </div>
        </div>
        <div class="grid-item" style="position: absolute; left: 469.109px; top: 0px">
          <div class="trending-item">
            <div class="thumb">
              <span class="banner">
                <?= $arr[4]["Kategoriename"] ?>
              </span>
              <div class="hover-effect">
                <div class="inner-content">
                  <a href="produkte.php">
                    <h4>
                      <?= $arr[4]["Kategoriebeschreibung"] ?>
                    </h4>
                  </a>
                  <a class="icon" href="produkte.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                      fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a>
                </div>
              </div>
              <img src="/SpDesign/resources/images/kategorien/<?= $arr[4]["Image"] ?>" alt="" />
            </div>
          </div>
        </div>
        <div class="grid-item" style="position: absolute; left: 938.218px; top: 0px">
          <div class="trending-item">
            <div class="thumb">
              <span class="banner">
                <?= $arr[2]["Kategoriename"] ?>
              </span>
              <div class="hover-effect">
                <div class="inner-content">
                  <a href="produkte.php">
                    <h4>
                      <?= $arr[2]["Kategoriebeschreibung"] ?>
                    </h4>
                  </a>
                  <a class="icon" href="produkte.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                      fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a>
                </div>
              </div>
              <img src="/SpDesign/resources/images/kategorien/<?= $arr[2]["Image"] ?>" alt="" />
            </div>
          </div>
        </div>
        <div class="grid-item" style="position: absolute; left: 1407.33px; top: 0px">
          <div class="trending-item">
            <div class="thumb">
              <span class="banner">
                <?= $arr[5]["Kategoriename"] ?>
              </span>
              <div class="hover-effect">
                <div class="inner-content">
                  <a href="produkte.php">
                    <h4>
                      <?= $arr[5]["Kategoriebeschreibung"] ?>
                    </h4>
                  </a>
                  <a class="icon" href="produkte.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                      fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a>
                </div>
              </div>
              <img src="/SpDesign/resources/images/kategorien/<?= $arr[5]["Image"] ?>" alt="" />
            </div>
          </div>
        </div>
        <div class="grid-item" style="position: absolute; left: 469.109px; top: 347.125px">
          <div class="trending-item">
            <div class="thumb">
              <span class="banner">
                <?= $arr[3]["Kategoriename"] ?>
              </span>
              <div class="hover-effect">
                <div class="inner-content">
                  <a href="produkte.php">
                    <h4>
                      <?= $arr[3]["Kategoriebeschreibung"] ?>
                    </h4>
                  </a>
                  <a class="icon" href="produkte.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                      fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a>
                </div>
              </div>
              <img src="/SpDesign/resources/images/kategorien/<?= $arr[3]["Image"] ?>" alt="" />
            </div>
          </div>
        </div>
        <div class="grid-item" style="position: absolute; left: 1407.33px; top: 347.125px">
          <div class="trending-item">
            <div class="thumb">
              <span class="banner">
                <?= $arr[1]["Kategoriename"] ?>
              </span>
              <div class="hover-effect">
                <div class="inner-content">
                  <a href="produkte.php">
                    <h4>
                      <?= $arr[1]["Kategoriebeschreibung"] ?>
                    </h4>
                  </a>
                  <a class="icon" href="produkte.php"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                      fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                      </path>
                    </svg></a>
                </div>
              </div>
              <img src="/SpDesign/resources/images/kategorien/<?= $arr[1]["Image"] ?>" alt="" />
            </div>
          </div>
        </div>
        <div class="grid-item" style="position: absolute; left: 469.109px; top: 694.25px">
        </div>
      </div>
    </div>
  </div>
</section>