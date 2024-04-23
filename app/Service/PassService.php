<?php

namespace Mahathir\RailMvc\Service;

use Mahathir\RailMvc\Domain\Pass;
use Mahathir\RailMvc\Repository\PassRepository;

class PassService
{
    private PassRepository $passRepository;

    public function __construct(PassRepository $passRepository)
    {
        $this->passRepository = $passRepository;
    }

    public function getAllPasses(): Pass
    {
        return $this->passRepository->findAll();
    }

    public function getPassesByNumber(string $passNumber): Pass
    {
        return $this->passRepository->findByNumber($passNumber);
    }

    public function getPassById(int $passId): ?Pass
    {
        return $this->passRepository->findById($passId);
    }
}