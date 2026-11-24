<?php

require_once __DIR__ . '/FuncionarioInterface.php';

class FuncionarioCLT implements FuncionarioInterface
{
    public function contratar(): void
    {
        echo "Funcionário CLT contratado.<br>";
    }

    public function demitir(): void
    {
        echo "Funcionário CLT desligado.<br>";
    }
}