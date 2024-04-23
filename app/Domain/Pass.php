<?php

namespace Mahathir\RailMvc\Domain;

class Pass {
    public int $ID;
    public ?string $PassNumber = null;
    public ?string $FullName = null;
    public ?string $ProfileImage = null;
    public ?int $ContactNumber = null;
    public ?string $Email = null;
    public ?string $IdentityType = null;
    public ?string $IdentityCardno = null;
    public ?string $Category = null;
    public ?string $Source = null;
    public ?string $Destination = null;
    public ?string $TrainClass = null;
    public ?string $FromDate = null;
    public ?string $ToDate = null;
    public ?string $wayType = null;
    public ?int $Cost = null;
    public ?\DateTime $PasscreationDate = null;
}