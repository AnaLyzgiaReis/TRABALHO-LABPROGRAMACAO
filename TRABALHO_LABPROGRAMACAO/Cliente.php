<?php

require_once "Pessoa.php";

class Cliente extends Pessoa
{
    private Data $dataCadastro;
    private string $preferencias;

    public function __construct(
        string $nome,
        string $cpf,
        string $sexo,
        Data $dataNascimento
    ) {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);

        $this->dataCadastro = new Data(date("d"), date("m"), date("Y"));

        $this->preferencias = "";
    }

    public function imprimir(){

    }


    
    /**
     * Get the value of dataCadastro
     */ 
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set the value of dataCadastro
     *
     * @return  self
     */ 
    public function setDataCadastro(Data $dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get the value of preferencias
     */ 
    public function getPreferencias()
    {
        return $this->preferencias;
    }

    /**
     * Set the value of preferencias
     *
     * @return  self
     */ 
    public function setPreferencias(string $preferencias)
    {
        $this->preferencias = $preferencias;

        return $this;
    }
}