<?php

namespace Mahathir\RailMvc\Repository;

use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Domain\Contact;

class ContactRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function saveMessage(Contact $contact): Contact
    {
        $statement = $this->connection->prepare("INSERT INTO tblcontact (Name, Email, Message, EnquiryDate, IsRead) VALUES (?, ?, ?, ?, ?)");
        $statement->execute([
            $contact->Name, $contact->Email, $contact->Message, $contact->EnquiryDate->format('Y-m-d H:i:s'), $contact->IsRead
        ]);
        return $contact;
   }
}