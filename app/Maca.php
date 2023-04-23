<?php

namespace App;

class Maca
{
    private string $sprite = "🍎";
    private $PosicaoColuna;
    private $PosicaoLinha;

    public function getSprite(): string
    {
        return $this->sprite;
    }

    public function carregarPosicaoSurgimento(int $max_linha, int $max_coluna)
    {
        $this->setPosicaoLinha(rand(0, $max_linha));
        $this->setPosicaoColuna(rand(0, $max_coluna));
    }

    public function getPosicaoLinha()
    {
        return $this->PosicaoLinha;
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
