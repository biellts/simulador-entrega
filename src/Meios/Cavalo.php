<?php
require_once __DIR__ . '/../Base/MeioDeEntregaBase.php';

class Cavalo extends MeioDeEntregaBase {
    public function __construct() {
        parent::__construct("Cavalo", 10, 0.1);
    }
}
