<?php

include 'Database.php';

class ControlaInvestidor
{
    private $tabela = 'investidores';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    public function salvar(Investidor $investidor)
    {
        try {
            $sql = "INSERT INTO $this->tabela (nome, email, objfinanceiros) VALUES (?, ?, ?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$investidor->getNome(), $investidor->getEmail(), $investidor->getObjfinanceiros()]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao inserir investidor: " . $e->getMessage());
        }
    }

    public function listar()
    {
        try {
            $sql = "SELECT * FROM $this->tabela";
            $stmt = $this->connection->query($sql);
            $investidor = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $investidor;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao listar investidor: " . $e->getMessage());
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
            throw new \Exception("Erro ao excluir investidor: " . $e->getMessage());
        }
    }

    public function buscarPorId($id)
    {
        try {
            $sql = "SELECT * FROM $this->tabela WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);
            $investidor = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->db->closeConnection();
            return $investidor;
        } catch (\Exception $e) {
            throw new \Exception("Erro ao buscar investidor: " . $e->getMessage());
        }
    }

    public function atualizar(Investidor $investidor)
    {
        try {
            $sql = "UPDATE $this->tabela SET nome = ?, email = ?, objfinanceiros = ? WHERE id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([
                $investidor->getNome(),
                $investidor->getEmail(),
                $investidor->getObjfinanceiros(),
                $investidor->getId()
            ]);
            $this->db->closeConnection();
        } catch (\Exception $e) {
            throw new \Exception("Erro ao atualizar investidor: " . $e->getMessage());
        }
    }
}