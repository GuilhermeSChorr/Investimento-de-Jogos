<?php

include 'Database.php';

class ControlaJogo
{
    private $tabela = 'jogos';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function salvar(Jogo $jogo)
    {
        try {
            $sql = "INSERT INTO $this->tabela (nome, preco, quantidadeestoque) VALUES (?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$jogo->getNome(), $jogo->getpreco(), $jogo->getQuantidadeEstoque()]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao inserir Jogo: " . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM $this->tabela";
            $stmt = $this->connection->query($sql);
            $jogos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $jogos;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao listar usuários: " . $e->getMessage());
        }
    }

    public function excluir($id)
    {
        try {
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao excluir jogo: " . $e->getMessage());
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabela WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $jogo;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao buscar jogo: " . $e->getMessage());
        }
    }

    public function atualizar(Jogo $jogo)
    {
        try {
            $sql = "UPDATE $this->tabela SET nome = ?, preco = ?, quantidadeestoque = ? WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                $jogo->getNome(),
                $jogo->getpreco(),
                $jogo->getQuantidadeestoque(),
                $jogo->getId()
            ]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar jogo: " . $e->getMessage());
        }
    }
}