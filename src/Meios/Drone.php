<?php
require_once __DIR__ . '/../Base/MeioDeEntregaBase.php';

class Drone extends MeioDeEntregaBase {
    public function __construct() {
        parent::__construct("Drone", 60, 0.2, ["chuva"]);
    }
}
