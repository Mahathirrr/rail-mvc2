<?php

namespace Mahathir\RailMvc\Service;

use Mahathir\RailMvc\Repository\ContactRepository;

class ContactService
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function saveMessage(string $name, string $email, string $message): void
    {
        $this->contactRepository->saveMessage($name, $email, $message);
    }
}