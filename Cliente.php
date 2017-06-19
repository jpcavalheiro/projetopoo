<?php

class Cliente {
    public $nome;
    public $cpf;
    public $sexo;
    public $logradouro;
    public $bairro;
    public $cidade;
    public $uf;


    public function __construct($nome, $cpf, $sexo, $logradouro, $bairro, $cidade, $uf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;

    }

    public function getNome(){
        return $this->nome;
    }

    public function rsort(){
        rsort($Cliente);

    }

    public function asort(){
        asort($Cliente);
    }
}