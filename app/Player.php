<?php


namespace App;

class Player
{
    private $PosicaoColuna;
    private $PosicaoLinha;
    private $sprite = "♔";

    public function __construct()
    {
        $this->setPosicaoLinha(0)->setPosicaoColuna(0);
    }

    public function getPosicaoLinha()
    {
        return $this->PosicaoLinha;
    }

    public function getSprite()
    {
        return $this->sprite;
    }
    public function setPosicaoLinha($PosicaoLinha)
    {
        $this->PosicaoLinha = $PosicaoLinha;
        return $this;
    }

    public function getPosicaoColuna()
    {
        return $this->PosicaoColuna;
    }

    public function setPosicaoColuna($PosicaoColuna)
    {
        $this->PosicaoColuna = $PosicaoColuna;
        return $this;
    }
}
