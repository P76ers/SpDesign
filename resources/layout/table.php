<?php

// echo '<pre>', var_dump($_GET), '</pre>';

$con = dbConnect();

$sql = "SELECT 
          ArtikeliD,
          Artikelname, 
          Artikelbeschreibung, 
          Einzelpreis, 
          Image
        FROM artikel
        ";

$listeArtikelHeader = mysqli_query($con, $sql);

$zeileArtikelHeader = mysqli_fetch_assoc($listeArtikelHeader);

$i = 0;
foreach ($zeileArtikelHeader as $key => $value) {
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

<form action="" method="POST">
  <table class="'table table-striped" data-toggle="table" data-pagination="true" data-search="true"
    data-show-columns="true" data-show-columns="true" data-show-refresh="true" data-show-columns-toggle-all="true"
    data-show-pagination-switch="true" data-show-toggle="true" data-show-fullscreen="true" data-buttons="buttons"
    data-buttons-align="left" data-buttons-class="primary" data-buttons-prefix="btn-sm btn" data-card-view="false"
    data-checkbox-header="false" data-click-to-select="true" data-click-to-select="true"
    data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-search-accent-neutralise="true"
    data-search-highlight="true" data-select-item-name="id" data-id-field="id" id="table">
    <thead class="table-dark">
      <tr>
        <th></th>
        <th data-sortable="true" data-field="name">
          <?= $arrArtikelHeader[1] ?>
        </th>
        <th data-sortable="true" data-field="Einzelpreis">
          <?= $arrArtikelHeader[2] ?>
        </th>
        <th data-sortable="true" data-field="Einzelpreis">

          <?= $arrArtikelHeader[3] ?>
        </th>
        <th data-sortable="true" data-field="bilder" data-visible="false">
          <?= $arrArtikelHeader[4] ?>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($arrArtikelValues); $i++) {
        echo '<tr><td>
        <div class="checkbox-wrapper-39">
        <label>
          <input type="checkbox" name="' . $arrArtikelValues[$i][$arrArtikelHeader[0]] . '"/>
          <span class="checkbox"></span>
        </label>
      </div>
        </td> ';
        echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[1]] . '</td>';
        echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[2]] . '</td>';
        echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[3]] . '</td>';
        echo '<td><img src="/SpDesign/resources/images/produkte/' . $arrArtikelValues[$i][$arrArtikelHeader[4]] . '" alt="Image" ></td>';
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
  <div class="col-buy">
    <button class="buy btn btn-primary">Buy</button>
  </div>
</form>