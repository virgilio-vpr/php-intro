<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = array('infantil', 'adolescente', 'adulto', 'idoso');

    if (validaNome($nome) && validaIdade($idade)) {
        
        removeMensagemErro();

        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias) - 1; $i++) {

                if ($categorias[$i] == 'infantil') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias) - 1; $i++) {
                if ($categorias[$i] == 'adolescente') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade >= 19 && $idade <= 60) {
            for ($i = 0; $i <= count($categorias) - 1; $i++) {
                if ($categorias[$i] == 'adulto') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias) - 1; $i++) {
                if ($categorias[$i] == 'idoso') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    {
        removeMensagemSucesso();
        return obterMensagemErro();
    }

}
