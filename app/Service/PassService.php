<?php

namespace Mahathir\RailMvc\Service;

use Mahathir\RailMvc\Model\Pass;
use Mahathir\RailMvc\Repository\PassRepository;

class PassService
{
    private $passRepository;

    public function __construct()
    {
        $this->passRepository = new PassRepository();
    }

    public function getAllPasses(): array
    {
        return $this->passRepository->findAll();
    }

    public function searchPasses(string $searchData): array
    {
        return $this->passRepository->findByNumber($searchData);
    }

    public function getPassById(int $passId): ?Pass
    {
        return $this->passRepository->findById($passId);
    }
}