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
            <div class="contact_title mb-4">Editar Cliente</div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Id</h5>
              </div>
              <div class="col-7">
                <div><?= $cliente->id ?></div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">DNI</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="dni" value="<?= $cliente->dni ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Nombre</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="nombre" value="<?= $cliente->nombre ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Apellidos</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="apellidos" value="<?= $cliente->apellidos ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Email</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="email" class="form-control" name="email" value="<?= $cliente->email ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Teléfono</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="telefono" value="<?= $cliente->telefono ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Dirección</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="direccion" value="<?= $cliente->direccion ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Localidad</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="localidad" value="<?= $cliente->localidad ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Código Postal</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="codigo_postal" value="<?= $cliente->codigo_postal ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">País</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="pais" value="<?= $cliente->pais ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Dominio</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="dominio" value="<?= $cliente->dominio ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">IP Address</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" name="ip_address" value="<?= $cliente->ip_address ?? '' ?>">
                </div>
              </div>
            </div>

            <div class="row mb-3 border-bottom pb-2">
              <div class="align-self-center col-5">
                <h5 class="mb-0">Fecha Alta</h5>
              </div>
              <div class="col-7">
                <div class="form-group mb-0">
                  <input type="date" class="form-control" name="fecha_alta" value="<?= $cliente->fecha_alta ?? '' ?>">
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
                    <?php foreach ($planes as $plan) { ?>
                      <option value="<?= $plan->id ?>" <?= ($cliente->plan_hosting == $plan->id) ?'selected' : '' ?>>
                        <?= $plan->nombre ?>
                      </option>
                    <?php } ?>
                  </select>

                </div>
              </div>
            </div>

            <div class="row justify-content-end">
              <button class="contact_button trans_200" type="submit">Actualizar</button>
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

