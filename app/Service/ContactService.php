<?php

namespace Mahathir\RailMvc\Service;

use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Domain\Contact;
use Mahathir\RailMvc\Exception\ValidateException;
use Mahathir\RailMvc\Model\ContactRequest;
use Mahathir\RailMvc\Model\ContactResponse;
use Mahathir\RailMvc\Repository\ContactRepository;

class ContactService
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function saveMessage(ContactRequest $request): ContactResponse
    {
        try {
            Database::beginTransaction();

            $contact = new Contact();
            $contact->Name = $request->Name;
            $contact->Email = $request->Email;
            $contact->Message = $request->Message;

            $this->contactRepository->saveMessage($contact);

            $response = new ContactResponse();
            $response->contact = $contact;

            Database::commitTransaction();
            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }
}