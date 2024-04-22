<?php

namespace Mahathir\RailMvc\Domain;

class Contact {
    public int $ID;
    public ?string $Name;
    public ?string $Email;
    public ?string $Message;
    public \DateTime $EnquiryDate;
    public ?int $IsRead;
}