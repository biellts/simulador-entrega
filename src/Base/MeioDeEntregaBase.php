<?php
require_once __DIR__ . '/../Interfaces/MeioDeEntregaInterface.php';

abstract class MeioDeEntregaBase implements MeioDeEntregaInterface {
    protected string $nome;
    protected float $velocidade;
    protected float $custoPorKm;
    protected array $restricoesClima;

    public function __construct(string $nome, float $velocidade, float $custoPorKm, array $restricoesClima = []) {
        $this->nome = $nome;
        $this->velocidade = $velocidade;
        $this->custoPorKm = $custoPorKm;
        $this->restricoesClima = $restricoesClima;
    }

    public function calcularTempoEntrega(float $distancia, string $clima): float {
        return $distancia / $this->velocidade;
    }

    public function calcularCustoEntrega(float $distancia): float {
        return $distancia * $this->custoPorKm;
    }

    public function podeOperar(string $clima): bool {
        return !in_array($clima, $this->restricoesClima);
    }

    public function getNome(): string {
        return $this->nome;
    }
}
