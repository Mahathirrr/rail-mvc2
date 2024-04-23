<?php

namespace Mahathir\RailMvc\Domain;

class Page {
    public int $ID;
    public ?string $PageType = null;
    public ?string $PageTitle = null;
    public ?string $PageDescription = null;
    public ?string $Email = null;
    public ?int $MobileNumber = null;
    public \DateTime $UpdationDate;
}