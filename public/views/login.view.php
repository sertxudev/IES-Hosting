<?php
require_once 'public/views/partials/head.view.php';
require_once 'public/views/partials/header.view.php';
require_once 'public/views/partials/menu.view.php';
?>
<div class="contact" style="margin-top: 100px;">
  <div class="container">
    <div class="row">

      <!-- Login Form -->
      <div class="col-lg-4 contact_form_col mx-auto">
        <div class="contact_form_container">
          <div class="contact_title">Private area</div>
          <div class="text-danger"><?= $errores['password'] ?? '' ?></div>
          <form action="/login" class="contact_form mt-4" method="post">
            <div class="row contact_row">
              <div class="col-12">
                <input type="email" name="email" class="contact_input" placeholder="E-mail" required="required">
              </div>
              <div class="col-12">
                <input type="password" name="password" class="contact_input" placeholder="Password" required="required">
              </div>
            </div>
            <button class="contact_button trans_200">log in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once 'public/views/partials/footer.view.php';
require_once 'public/views/partials/foot.view.php';
?>

