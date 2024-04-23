<?php

namespace Mahathir\RailMvc\Domain;

class Contact
{
    public int $ID;
    public ?string $Name = null;
    public ?string $Email = null;
    public ?string $Message = null;
    public \DateTime $EnquiryDate;
    public ?int $IsRead = null;
}