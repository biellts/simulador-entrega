<?php
require_once __DIR__ . '/src/Meios/Moto.php';
require_once __DIR__ . '/src/Meios/Bicicleta.php';
require_once __DIR__ . '/src/Meios/Drone.php';
require_once __DIR__ . '/src/Meios/Cavalo.php';
require_once __DIR__ . '/src/SimuladorDeEntrega.php';

$meios = [
    new Moto(),
    new Bicicleta(),
    new Drone(),
    new Cavalo()
];

$simulador = new SimuladorDeEntrega(30, "chuva");
$simulador->simularTodos($meios);
