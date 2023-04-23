<?php

namespace App;

class RegrasMovimentos
{

    // cima
    public function C(Player $jogador, int $total_coluna)
    {
        if (!$this->colunaPassaLayout($total_coluna, ($jogador->getPosicaoColuna() - 1))) {
            $jogador->setPosicaoColuna($jogador->getPosicaoColuna() - 1);
        }
        return $jogador;
    }

    // baixo 
    public function B(Player $jogador, int $total_coluna)
    {
        if (!$this->colunaPassaLayout($total_coluna, ($jogador->getPosicaoColuna() + 1))) {
            $jogador->setPosicaoColuna($jogador->getPosicaoColuna() + 1);
            return $jogador;
        }
    }

    // esquerda
    public function E(Player $jogador, int $total_coluna)
    {
        if (!$this->colunaPassaLayout($total_coluna, ($jogador->getPosicaoLinha() - 1))) {
            $jogador->setPosicaoLinha($jogador->getPosicaoLinha() - 1);
            return $jogador;
        }
    }

    // direita
    public function D(Player $jogador, int $total_coluna)
    {
        if (!$this->colunaPassaLayout($total_coluna, ($jogador->getPosicaoLinha() + 1))) {
            $jogador->setPosicaoLinha($jogador->getPosicaoLinha() + 1);
            return $jogador;
        }
    }


    private function colunaPassaLayout(int $valor_max_coluna, int $valor_movimento): bool
    {
        if ($valor_movimento > $valor_max_coluna || $valor_movimento < 0) {
            return true;
        }
        return false;
    }
}
