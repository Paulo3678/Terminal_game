<?php

use App\Mapa;
use App\Player;

require __DIR__ . "/autoload.php";

$mapa = new Mapa();
$jogador = new Player();

$mapa->setJogador($jogador);

$jogando = true;

// system("clear");

while ($jogador) {
    echo "--------------------" . PHP_EOL;
    echo "(C) Cima" . PHP_EOL;
    echo "(B) Baixo" . PHP_EOL;
    echo "(E) Esquerda" . PHP_EOL;
    echo "(D) Direita" . PHP_EOL;
    echo "--------------------" . PHP_EOL . PHP_EOL;

    $mapa->mostrarMapa();

    $movimento = readline("Para onde deseja mover? ");
    if ($movimento !== "sair") {
        $mapa->movimentarJogador($movimento);
        // system("clear");
    } else {
        $jogador = false;
    }
}
