<?php

// echo '<pre>', var_dump($_GET), '</pre>';

$con = dbConnect();

$sql = "SELECT  Status, 
                Datum, 
                Uhrzeit, 
                Message 
        FROM termine INNER JOIN kunden ON KundenNr = KundenID
        WHERE KundenID = " . $_SESSION["KundenNr"] . ";
        ";

$listeTerminHeader = mysqli_query($con, $sql);

$zeileTerminHeader = mysqli_fetch_assoc($listeTerminHeader);

$i = 0;
foreach ($zeileTerminHeader as $key => $value) {
  $arrArtikelHeader[$i] = $key;
  $i++;
}

$listeArtikelValues = mysqli_query($con, $sql);

$i = 0;
while ($zeile = mysqli_fetch_assoc($listeArtikelValues)) {
  foreach ($zeile as $key => $value) {
    $arrArtikelValues[$i][$key] = $value;
  }
  $i++;
}

// echo $arrArtikelValues[0][$arrArtikelHeader[1]];
// echo '<pre>', var_dump($arrArtikelHeader), '</pre>';
// echo '<pre>', var_dump($arrArtikelValues), '</pre>';
?>

<div class="page-banner2 change-name2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="header-text">
          <h2><em>Meine Termine</em></h2>
        </div>
      </div>
    </div>
  </div>
</div>

<table class="'table table-striped" data-toggle="table" data-pagination="true" data-search="true"
  data-show-columns="true" data-show-columns="true" data-show-refresh="true" data-show-columns-toggle-all="true"
  data-show-pagination-switch="true" data-show-toggle="true" data-show-fullscreen="true" data-buttons="buttons"
  data-buttons-align="left" data-buttons-class="primary" data-buttons-prefix="btn-sm btn" data-card-view="false"
  data-checkbox-header="false" data-click-to-select="true" data-click-to-select="true"
  data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-search-accent-neutralise="true"
  data-search-highlight="true" data-select-item-name="id" data-id-field="id" id="table">
  <thead class="table-dark">
    <tr>
      <th data-sortable="true" data-field="Status">
        <?= $arrArtikelHeader[0] ?>
      </th>
      <th data-sortable="true" data-field="Datum">
        <?= $arrArtikelHeader[1] ?>
      </th>
      <th data-sortable="true" data-field="Uhrzeit">

        <?= $arrArtikelHeader[2] ?>
      </th>
      <th data-sortable="true" data-field="Message">
        <?= $arrArtikelHeader[3] ?>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    for ($i = 0; $i < count($arrArtikelValues); $i++) {
      echo '<tr>';
      echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[0]] . '</td>';
      echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[1]] . '</td>';
      echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[2]] . '</td>';
      echo '<td>' . $arrArtikelValues[$i][$arrArtikelHeader[3]] . '</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>