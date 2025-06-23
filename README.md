# 🚚 Simulador de Entrega

Este é um projeto em PHP que simula o tempo e o custo de entrega utilizando diferentes meios de transporte, considerando a distância e o clima.

## 📦 Funcionalidades

- Interface comum para todos os meios de entrega.
- Meios de entrega disponíveis:
  - 🏍️ Moto
  - 🚲 Bicicleta
  - 🛸 Drone
  - 🐎 Cavalo
- Restrições climáticas aplicadas para alguns meios.
- Simulação automatizada com base em distância e clima.

---

## 🗂️ Estrutura de Diretórios

```
simulador-entrega/
├── src/
│   ├── Interfaces/
│   │   └── MeioDeEntregaInterface.php
│   ├── Base/
│   │   └── MeioDeEntregaBase.php
│   ├── Meios/
│   │   ├── Moto.php
│   │   ├── Bicicleta.php
│   │   ├── Drone.php
│   │   └── Cavalo.php
│   └── SimuladorDeEntrega.php
├── index.php
└── README.md
```

---

### 📌 Passos para rodar o simulador

1. Clone o repositório ou baixe os arquivos:

```bash
git clone https://github.com/seu-usuario/simulador-entrega.git
cd simulador-entrega
```

2. Execute o script principal no terminal:

```bash
php index.php
```

Você verá a simulação no terminal, indicando:
- Se o meio pode operar no clima informado
- Tempo estimado da entrega
- Custo estimado

---

## 🌦️ Exemplo de uso

Imagine uma simulação de 30 km com o clima "chuva". A saída pode ser:

```
== Moto ==
 Tempo estimado: 0.6 horas
 Custo estimado: R$ 15,00

== Bicicleta ==
 Não pode operar no clima: chuva

== Drone ==
 Não pode operar no clima: chuva

== Cavalo ==
 Tempo estimado: 3 horas
 Custo estimado: R$ 3,00
```

---

## 🧩 Tecnologias Utilizadas

- PHP (Programação Orientada a Objetos)
- Terminal/CLI

---


