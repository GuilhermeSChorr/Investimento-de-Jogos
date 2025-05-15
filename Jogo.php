<?php

class Jogo
{
    private $id;
    private $nome;
    private $preco;
    private $quantidadeestoque;

    public function __construct($nome, $preco, $quantidadeestoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeestoque = $quantidadeestoque;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQuantidadeestoque()
    {
        return $this->quantidadeestoque;
    }

    public function setQuantidadeestoque($quantidadeestoque)
    {
        $this->quantidadeestoque = $quantidadeestoque;
    }
}