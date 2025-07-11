<?php
interface MeioDeEntregaInterface {
    public function calcularTempoEntrega(float $distancia, string $clima): float;
    public function calcularCustoEntrega(float $distancia): float;
    public function podeOperar(string $clima): bool;
    public function getNome(): string;
}
