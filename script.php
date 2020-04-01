<?php
$categorias = array('infantil', 'adolescente', 'adulto', 'idoso');

//print_r($categoria);
$nome = $_POST['text_nome'];
$idade = (int) $_POST['text_idade'];


if (empty($nome)) {
    echo 'O nome não pode estar vazio';
    return;
}

if (strlen($nome) < 3) {
    echo 'O nome não pode estar vazio';
    return;
}

if (strlen($nome) > 40) {
    echo 'O nome é muito extenso';
    return;
}

if (!is_numeric($idade)) {
    echo 'Número informado inválido';
    return;
}


if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias) - 1; $i++) {

        if ($categorias[$i] == 'infantil') {
            echo ("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias) - 1; $i++) {
        if ($categorias[$i] == 'adolescente') {
            echo ("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
        }
    }
} else if ($idade >= 19 && $idade <= 60) {
    for ($i = 0; $i <= count($categorias) - 1; $i++) {
        if ($categorias[$i] == 'adulto') {
            echo ("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
        }
    }
} else {
    for ($i = 0; $i <= count($categorias) - 1; $i++) {
        if ($categorias[$i] == 'idoso') {
            echo ("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
        }
    }
}
