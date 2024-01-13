<?php
if ($redirect == true) {
  echo "
  <script>
    window.setTimeout('location.href=\"index.php\"', 2000);
  </script>
  ";
  // die();
} else if ($redirect == false) {
  echo "
  <script>
  window.setTimeout(function(){
    $('#modalBack').addClass('hideIt');
    $('#myModal').removeClass('show');
    $('#myModal').addClass('hide');
  }, 2000);
  </script>
  '";
}
?>




<div class="Modal-Background" id="modalBack">
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