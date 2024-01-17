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
  $arrTerminHeader[$i] = $key;
  $i++;
}

$listeTerminValues = mysqli_query($con, $sql);

$i = 0;
while ($zeile = mysqli_fetch_assoc($listeTerminValues)) {
  foreach ($zeile as $key => $value) {
    $arrTerminValues[$i][$key] = $value;
  }
  $i++;
}

// echo $arrTerminValues[0][$arrTerminHeader[1]];
// echo '<pre>', var_dump($arrTerminHeader), '</pre>';
// echo '<pre>', var_dump($arrTerminValues), '</pre>';
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
        <?= $arrTerminHeader[0] ?>
      </th>
      <th data-sortable="true" data-field="Datum">
        <?= $arrTerminHeader[1] ?>
      </th>
      <th data-sortable="true" data-field="Uhrzeit">

        <?= $arrTerminHeader[2] ?>
      </th>
      <th data-sortable="true" data-field="Message">
        <?= $arrTerminHeader[3] ?>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    for ($i = 0; $i < count($arrTerminValues); $i++) {
      echo '<tr>';
      echo '<td> ' . $arrTerminValues[$i][$arrTerminHeader[0]] . '</td>';
      echo '<td> ' . $arrTerminValues[$i][$arrTerminHeader[1]] . '</td>';
      echo '<td> ' . $arrTerminValues[$i][$arrTerminHeader[2]] . '</td>';
      echo '<td>' . $arrTerminValues[$i][$arrTerminHeader[3]] . '</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>