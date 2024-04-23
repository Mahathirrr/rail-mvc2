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
    $result = $statement->fetch(\PDO::FETCH_ASSOC); // Fetch as associative array
    if (!$result) {
        return null;
    }

    // Convert string representation of date/time to DateTime object
    $result['UpdationDate'] = new \DateTime($result['UpdationDate']);

    // Create a new Page object and populate its properties
    $page = new Page();
    $page->ID = $result['ID'];
    $page->PageType = $result['PageType'];
    $page->PageTitle = $result['PageTitle'];
    $page->PageDescription = $result['PageDescription'];
    $page->Email = $result['Email'];
    $page->MobileNumber = $result['MobileNumber'];
    $page->UpdationDate = $result['UpdationDate'];

    return $page;
}
}