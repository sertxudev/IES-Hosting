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
        <form method="post">
          <div class="contact_form_container text-dark">
            <div class="contact_title mb-4">Crear Cliente</div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">DNI</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="dni">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Nombre</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="nombre">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Apellidos</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="apellidos">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Email</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="email" class="form-control" name="email">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Teléfono</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="telefono">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Dirección</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="direccion">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Localidad</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="localidad">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Código Postal</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="codigo_postal">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">País</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="pais">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Dominio</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="dominio">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">IP Address</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="ip_address">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Fecha Alta</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="date" class="form-control" name="fecha_alta">
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Plan Hosting</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">

                  <select name="plan" class="form-control">
                    <option value="" hidden>--- Select a plan ---</option>
                    <?php foreach ($planes as $plan) { ?>
                      <option value="<?= $plan->id ?>">
                        <?= $plan->nombre ?>
                      </option>
                    <?php } ?>
                  </select>

                </div>
              </div>
            </div>

            <div class="row justify-content-end">
              <button class="contact_button trans_200" type="submit">Crear</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
require_once 'public/views/partials/footer.view.php';
require_once 'public/views/partials/foot.view.php';
?>

