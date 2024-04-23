<?php

namespace Mahathir\RailMvc\Repository;

use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Model\Pass;
use Mahathir\RailMvc\Model\Page;

class PassRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = Database::getConnection();
    }

    public function findAll(): array
    {
        $statement = $this->connection->query("SELECT * FROM Pass");
        return $statement->fetchAll(\PDO::FETCH_CLASS, Pass::class);
    }

    public function findByNumber(string $passNumber): array
    {
        $statement = $this->connection->prepare("SELECT * FROM Pass WHERE PassNumber LIKE :passNumber");
        $statement->bindValue(':passNumber', $passNumber . '%');
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS, Pass::class);
    }

    public function findById(int $passId): ?Pass
    {
        $statement = $this->connection->prepare("SELECT * FROM Pass WHERE ID = :id");
        $statement->bindValue(':id', $passId);
        $statement->execute();
        $result = $statement->fetchObject(Pass::class);
        return $result ?: null;
    }
}