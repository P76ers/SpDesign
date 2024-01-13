<?php
if ($redirect == true) {
  echo "
  <script>
    window.setTimeout('location.href=\"index.php\"', 3000);
  </script>
  ";
  // die();
}

?>



<div class="Modal-Background">
  <div class="modal fade show" id="myModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
    style="display: block;" aria-modal="true" role="dialog">

    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header <?= $class ?>">
          <h5 class="modal-title" id="exampleModalCenterTitle">
            <?= $header ?>
          </h5>

        </div>
        <div class="modal-body <?= $class ?>">
          <p>
            <?= $text ?>
          </p>
        </div>

      </div>
    </div>
  </div>

</div>