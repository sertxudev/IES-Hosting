<?php

class Usuario extends Model {

  /** @var integer */
  protected $id;

  /** @var string */
  protected $email;

  /** @var string */
  protected $password;

  public function getTableName() {
    return 'usuarios';
  }
}
