<?php

namespace Mahathir\RailMvc\Repository;

use Mahathir\RailMvc\Domain\Page;

class PageRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findByType(string $type): ?Page
    {
        $statement = $this->connection->prepare("SELECT * FROM tblpage WHERE PageType = ?");
        $statement->execute([$type]);
        $result = $statement->fetchObject(Page::class);
        return $result ?: null;
    }
}