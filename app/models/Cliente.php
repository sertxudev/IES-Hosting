<?php

class Cliente extends Model {

  /** @var integer */
  protected $id;

  /** @var string */
  protected $dni;

  /** @var string */
  protected $nombre;

  /** @var string */
  protected $apellidos;

  /** @var string */
  protected $email;

  /** @var string */
  protected $telefono;

  /** @var string */
  protected $direccion;

  /** @var string */
  protected $localidad;

  /** @var string */
  protected $codigo_postal;

  /** @var string */
  protected $pais;

  /** @var string */
  protected $dominio;

  /** @var string */
  protected $ip_address;

  /** @var string */
  protected $fecha_alta;

  /** @var integer */
  protected $plan_hosting;

  public function getTableName() {
    return 'clientes';
  }
}
