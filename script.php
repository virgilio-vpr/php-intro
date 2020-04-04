<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['text_nome'];
$idade = $_POST['text_idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');