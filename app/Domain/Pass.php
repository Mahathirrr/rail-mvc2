<?php

namespace Mahathir\RailMvc\Domain;

class Pass {
    public int $ID;
    public ?string $PassNumber;
    public ?string $FullName;
    public ?string $ProfileImage;
    public ?int $ContactNumber;
    public ?string $Email;
    public ?string $IdentityType;
    public ?string $IdentityCardno;
    public ?string $Category;
    public ?string $Source;
    public ?string $Destination;
    public ?string $TrainClass;
    public ?string $FromDate;
    public ?string $ToDate;
    public ?string $wayType;
    public ?int $Cost;
    public ?\DateTime $PasscreationDate;
}