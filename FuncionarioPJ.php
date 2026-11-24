<?php

require_once __DIR__ . '/FuncionarioInterface.php';

class FuncionarioPJ implements FuncionarioInterface
{
    public function contratar(): void
    {
        echo "Funcionário PJ contratado.<br>";
    }

    public function demitir(): void
    {
        echo "Funcionário PJ desligado.<br>";
    }
}
