<?php

class Plan extends Model {

  /** @var integer */
  protected $id;

  /** @var string */
  protected $nombre;

  public function getTableName() {
    return 'planes';
  }
}
