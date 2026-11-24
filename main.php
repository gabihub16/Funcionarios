<?php

require_once __DIR__ . '/FuncionarioCLT.php';
require_once __DIR__ . '/FuncionarioPJ.php';

$funcionarios = [
    new FuncionarioCLT(),
    new FuncionarioPJ()
];

foreach ($funcionarios as $funcionario) {
    $funcionario->contratar();
    $funcionario->demitir();
}
