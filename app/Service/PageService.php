<?php

namespace Mahathir\RailMvc\Service;

use Mahathir\RailMvc\Domain\Page;
use Mahathir\RailMvc\Repository\PageRepository;

class PageService {
    private $pageRepository;

    public function __construct() {
        $this->pageRepository = new PageRepository;
    }

    public function getPageByType(string $type): ?Page {
        return $this->pageRepository->findByType($type);
    }
}