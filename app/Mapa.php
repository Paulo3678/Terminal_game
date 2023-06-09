<?php

namespace App;

use App\Maca;
use App\Player;

class Mapa
{
    private $quantidade_colunas = 8;
    private $quantidade_linhas = 8;

    private $layout = [];
    private $jogador;
    private $fruta;

    public function __construct()
    {
        $this->fruta = new Maca();
    }

    public function setJogador(Player $jogador)
    {
        $this->jogador = $jogador;
        $this->carregarLayout();
        $this->carregarFruta();
        $this->layout[$this->jogador->getPosicaoLinha()][$this->jogador->getPosicaoColuna()] = $this->jogador->getSprite();
    }

    private function carregarFruta()
    {
        $this->fruta->setPosicaoColuna($this->quantidade_colunas);
        $this->fruta->setPosicaoLinha($this->quantidade_linhas);
        $this->layout[$this->fruta->getPosicaoColuna()][$this->fruta->getPosicaoLinha()] = 0;
        $this->layout[$this->fruta->getPosicaoColuna()][$this->fruta->getPosicaoLinha()]  = $this->fruta->getSprite();
    }

    public function movimentarJogador(string $movimento)
    {
        $regras_movimento = new RegrasMovimentos();

        if (method_exists($regras_movimento, $movimento)) {
            $this->layout[$this->jogador->getPosicaoColuna()][$this->jogador->getPosicaoLinha()] = 0;
            call_user_func([$regras_movimento, $movimento], $this->jogador, $this->quantidade_colunas);
            $this->layout[$this->jogador->getPosicaoColuna()][$this->jogador->getPosicaoLinha()]  = $this->jogador->getSprite();
        }
    }

    public function mostrarMapa()
    {
        foreach ($this->layout as $key => $linha) {
            foreach ($linha as $key => $coluna) {
                echo $coluna == "0" ? '-' . "\u{0020}" : $coluna;
                echo " ";
            }
            echo PHP_EOL;
        }
    }

    private function carregarLayout()
    {
        for ($i = 0; $i <= $this->quantidade_colunas; $i++) {
            for ($j = 0; $j <= $this->quantidade_linhas; $j++) {
                $this->layout[$i][$j] = "0";
            }
        }
    }
}
