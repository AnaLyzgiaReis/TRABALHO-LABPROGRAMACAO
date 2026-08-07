<?php

require_once "Pessoa.php";

class Vendedor extends Pessoa
{
    private float $salario;
    private float $comissao;

    public function __construct(
        string $nome,
        string $cpf,
        string $sexo,
        Data $dataNascimento,
        float $salario,
        float $comissao
    ) {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);

        $this->salario = $salario;
        $this->comissao = $comissao;
    }

    public function imprimir(){

    }
}