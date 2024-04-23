<?php

namespace Mahathir\RailMvc\Domain;

class Admin {
    public int $ID;
    public ?string $AdminName = null;
    public ?string $UserName = null;
    public ?int $MobileNumber = null;
    public ?string $Email = null;
    public ?string $Password = null;
    public ?\DateTime $AdminRegdate = null;
}