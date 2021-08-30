<?php

class Pessoa_Construtor
{
    public $nome;
    public $email;
    public $telefone;
    public $dataNascimento;



    function __construct($nome, $email, $telefone, $dataNascimento)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
    }

    public function getPessoa()
    {
        echo "<br>Nome: " . $this->nome;
        echo "<br>Email: " . $this->email;
        echo "<br>Telefone: " . $this->telefone;
        echo "<br>Data de Nascimento: " . $this->dataNascimento;
    }
}