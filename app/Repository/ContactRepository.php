<?php

namespace Mahathir\RailMvc\Repository;

use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Domain\Contact;

class ContactRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = Database::getConnection();
    }

    public function saveMessage(string $name, string $email, string $message): void
    {
        $contact = new Contact();
        $contact->Name = $name;
        $contact->Email = $email;
        $contact->Message = $message;
        $contact->EnquiryDate = new \DateTime();
        $contact->IsRead = 0;

        $sql = "INSERT INTO tblcontact (Name, Email, Message, EnquiryDate, IsRead) VALUES (:name, :email, :message, :enquiryDate, :isRead)";
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(':name', $contact->Name);
        $statement->bindValue(':email', $contact->Email);
        $statement->bindValue(':message', $contact->Message);
        $statement->bindValue(':enquiryDate', $contact->EnquiryDate->format('Y-m-d H:i:s'));
        $statement->bindValue(':isRead', $contact->IsRead);
        $statement->execute();
    }
}