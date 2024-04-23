<?php

namespace Mahathir\RailMvc\Domain;

class Category {
    public int $ID;
    public ?string $CategoryName = null;
    public ?\DateTime $CreationDate = null;
}