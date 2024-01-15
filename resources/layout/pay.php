<?php

// echo '<pre>', var_dump($_GET), '</pre>', die();

$con = dbConnect();

$sql = "SELECT 
          ArtikeliD,
          Artikelname, 
          Artikelbeschreibung, 
          Einzelpreis, 
          Image
        FROM artikel
        WHERE " . $_SESSION["caddy"] . "
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
$gesamt = 0;
while ($zeile = mysqli_fetch_assoc($listeArtikelValues)) {
  foreach ($zeile as $key => $value) {
    $arrArtikelValues[$i][$key] = $value;
  }
  $gesamt += $arrArtikelValues[$i][$arrArtikelHeader[3]];
  $i++;
}

$gesamt = number_format($gesamt, 2, ',', '.') . "€";
// echo '<pre>', var_dump($gesamt), '</pre>';
// echo $gesamt;

?>
<br>
<form action="/SpDesign/resources/database/save.php" method="POST">
  <table class="'table table-striped" data-toggle="table" data-pagination="true" data-search="true"
    data-show-columns="true" data-show-columns="true" data-show-refresh="true" data-show-columns-toggle-all="true"
    data-show-pagination-switch="true" data-show-toggle="true" data-show-fullscreen="true" data-buttons="buttons"
    data-buttons-align="left" data-buttons-class="primary" data-buttons-prefix="btn-sm btn" data-card-view="false"
    data-checkbox-header="false" data-click-to-select="true" data-click-to-select="true"
    data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-search-accent-neutralise="true"
    data-search-highlight="true" data-select-item-name="id" data-id-field="id" id="table">
    <thead class="table-dark">
      <tr>
        <th data-sortable="true" data-field="Artikelname">
          <?= $arrArtikelHeader[1] ?>
        </th>
        <th data-sortable="true" data-field="Artikelbeschreibung">
          <?= $arrArtikelHeader[2] ?>
        </th>
        <th data-sortable="true" data-field="price">
          <?= $arrArtikelHeader[3] ?>
        </th>
        <th data-sortable="true" data-field="bilder" data-visible="true">
          <?= $arrArtikelHeader[4] ?>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($arrArtikelValues); $i++) {
        echo '<tr>';
        echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[1]] . '</td>';
        echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[2]] . '</td>';
        echo '<td> ' . $arrArtikelValues[$i][$arrArtikelHeader[3]] . '</td>';
        echo '<td><img src="/SpDesign/resources/images/produkte/' . $arrArtikelValues[$i][$arrArtikelHeader[4]] . '" alt="Image" ></td>';
        echo '</tr>';
      }
      echo '<tr> <td class="buy-gesamtpreis" colspan="3"><b>Gesamtpreis:  </b></td> ';
      echo '<td class="buy">' . $gesamt . '</td></tr> ';

      ?>
    </tbody>
  </table>
  <div class="col-buy">
    <button class="buy btn btn-primary">Buy</button>
  </div>
</form>