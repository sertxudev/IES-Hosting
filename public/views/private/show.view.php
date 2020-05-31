<?php
require_once 'public/views/partials/head.view.php';
require_once 'public/views/partials/header.view.php';
require_once 'public/views/partials/menu.view.php';
?>
<div class="contact" style="margin-top: 100px;">
  <div class="container">
    <div class="row">

      <!-- Login Form -->
      <div class="col-lg-5 contact_form_col mx-auto">
        <div class="contact_form_container text-dark">
          <div class="contact_title mb-4">Ver Cliente</div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Id</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->id ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>DNI</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->dni ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Nombre</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->nombre ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Apellidos</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->apellidos ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Email</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->email ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Teléfono</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->telefono ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Dirección</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->direccion ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Localidad</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->localidad ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Código Postal</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->codigo_postal ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>País</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->pais ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Dominio</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->dominio ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>IP Address</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->ip_address ?></div>
            </div>
          </div>

          <div class="row mb-3 border-bottom pb-2">
            <div class="col-5">
              <h5>Fecha Alta</h5>
            </div>
            <div class="col-7">
              <div><?= $cliente->fecha_alta ?></div>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-5">
              <h5>Plan Hosting</h5>
            </div>
            <div class="col-7">
              <div><?= $plan->nombre ?></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once 'public/views/partials/footer.view.php';
require_once 'public/views/partials/foot.view.php';
?>

