<?php
require_once __DIR__ . '/Interfaces/MeioDeEntregaInterface.php';

class SimuladorDeEntrega
{
    private float $distancia;
    private string $clima;

    public function __construct(float $distancia, string $clima)
    {
        $this->distancia = $distancia;
        $this->clima = $clima;
    }

    public function simularTodos(array $meios): void
    {
        foreach ($meios as $meio) {
            $this->simular($meio);
        }
    }

    private function simular(MeioDeEntregaInterface $meio): void
    {
        echo "== {$meio->getNome()} ==\n";
        if (!$meio->podeOperar($this->clima)) {
            echo " Não pode operar no clima: {$this->clima}\n\n";
            return;
        }

        $tempo = $meio->calcularTempoEntrega($this->distancia, $this->clima);
        $custo = $meio->calcularCustoEntrega($this->distancia);
        
        echo " Tempo estimado: " . round($tempo, 2) . " horas\n";
        echo " Custo estimado: R$ " . number_format($custo, 2, ',', '.') . "\n\n";
    }
}
