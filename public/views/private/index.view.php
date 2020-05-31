<?php
require_once 'public/views/partials/head.view.php';
require_once 'public/views/partials/header.view.php';
require_once 'public/views/partials/menu.view.php';
?>
<div class="contact" style="margin-top: 100px;">
  <div class="container">
    <div class="row">

      <!-- Login Form -->
      <div class="col-lg-10 contact_form_col mx-auto">
        <div class="contact_form_container">
          <div class="contact_title mb-4 row justify-content-between">
            Private area
            <div class="phone d-flex flex-row align-items-center justify-content-start">
              <div>
                <ul class="d-flex flex-row align-items-center justify-content-start">
                  <a href="/private/cliente/new" class="text-white">Crear nuevo</a>
                </ul>
              </div>
            </div>
          </div>
          <div class="table-responsive text-dark">
            <table class="table">
              <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($clientes as $cliente) { ?>
                <tr>
                  <th scope="row"><?= $cliente->id ?></th>
                  <td><?= $cliente->dni ?></td>
                  <td><?= $cliente->nombre ?></td>
                  <td><?= $cliente->apellidos ?></td>
                  <td><?= $cliente->email ?></td>
                  <td>
                    <a class="text-dark mr-3" href="private/cliente/<?= $cliente->id ?>">
                      <i class="fa fa-eye" style="font-size: 16px;"></i>
                    </a>
                    <a class="text-dark mr-3" href="private/cliente/<?= $cliente->id ?>/edit">
                      <i class="fa fa-pencil" style=private/"font-size: 16px;"></i>
                    </a>
                    <a class="text-dark mr-3" href="private/cliente/<?= $cliente->id ?>/delete">
                      <i class="fa fa-trash" style="font-size: 16px;"></i>
                    </a>
                  </td>
                </tr>
              <?php } ?>
              <?php

              /*


                  <td><?= $cliente->dni ?></td>
                  <td><?= $cliente->nombre ?></td>
                  <td><?= $cliente->apellidos ?></td>
                  <td><?= $cliente->email ?></td>
                  <td><?= $cliente->telefono ?></td>
                  <td><?= $cliente->direccion ?></td>
                  <td><?= $cliente->localidad ?></td>
                  <td><?= $cliente->codigo_postal ?></td>
                  <td><?= $cliente->pais ?></td>
                  <td><?= $cliente->dominio ?></td>
                  <td><?= $cliente->ip_address ?></td>
                  <td><?= $cliente->fecha_alta ?></td>
                  <td><?= $cliente->plan_hosting ?></td>


               */


              ?>
              </tbody>
            </table>
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

