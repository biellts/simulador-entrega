<?php
require_once __DIR__ . '/../Base/MeioDeEntregaBase.php';

class Bicicleta extends MeioDeEntregaBase {
    public function __construct() {
        parent::__construct("Bicicleta", 15, 0.0, ["chuva"]);
    }
}
