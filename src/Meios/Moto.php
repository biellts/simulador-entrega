<?php
require_once __DIR__ . '/../Base/MeioDeEntregaBase.php';

class Moto extends MeioDeEntregaBase {
    public function __construct() {
        parent::__construct("Moto", 50, 0.5);
    }
}
