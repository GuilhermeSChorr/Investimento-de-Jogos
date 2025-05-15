<?php

class Investidor
{
    private $id;
    private $nome;
    private $email;
    private $objfinanceiros;

    public function __construct($nome, $email, $objfinanceiros)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->objfinanceiros = $objfinanceiros;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getObjfinanceiros()
    {
        return $this->objfinanceiros;
    }

    public function setObjfinanceiros($objfinanceiros)
    {
        $this->objfinanceiros = $objfinanceiros;
    }
}