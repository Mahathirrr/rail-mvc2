<?php

namespace Mahathir\RailMvc\Repository;

use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Model\Page;

class PageRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = Database::getConnection();
    }

    public function findByType(string $type): ?Page
    {
        $statement = $this->connection->prepare("SELECT * FROM Page WHERE PageType = :type");
        $statement->bindValue(':type', $type);
        $statement->execute();
        $result = $statement->fetchObject(Page::class);
        return $result ?: null;
    }
}