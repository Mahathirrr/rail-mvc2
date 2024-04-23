<?php

namespace Mahathir\RailMvc\Repository;

use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Domain\Pass;

class PassRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findAll(): ?Pass
    {
        $statement = $this->connection->query("SELECT * FROM tblpass");
        $result = $statement->fetchAll(Pass::class);
        return $result ?: null;
    }

    public function findByNumber(string $passNumber): ?Pass
    {
        $statement = $this->connection->prepare("SELECT * FROM tblpass WHERE PassNumber LIKE ?");
        $statement->execute([$passNumber . '%']);
        $result = $statement->fetchAll(Pass::class);
        return $result ?: null;
    }

    public function findById(int $passId): ?Pass
    {
        $statement = $this->connection->prepare("SELECT * FROM tblpass WHERE ID = ?");
        $statement->execute([$passId]);
        $result = $statement->fetchObject(Pass::class);
        return $result ?: null;
    }
}