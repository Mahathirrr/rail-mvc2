<?php

namespace Mahathir\RailMvc\Domain;

class Page {
    public int $ID;
    public ?string $PageType;
    public ?string $PageTitle;
    public ?string $PageDescription;
    public ?string $Email;
    public ?int $MobileNumber;
    public \DateTime $UpdationDate;
}