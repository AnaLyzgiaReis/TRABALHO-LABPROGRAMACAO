<?php

require_once "Data.php";

class Pessoa
{
    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;

    public function __construct(
        string $nome,
        string $cpf,
        string $sexo,
        Data $dataNascimento
    ) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
    }

    public function imprimir(){

    }
}