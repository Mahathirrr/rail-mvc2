<?php

namespace Mahathir\RailMvc\Service;

use Mahathir\RailMvc\Domain\Page;
use Mahathir\RailMvc\Repository\PageRepository;

class PageService {
    private PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository) {
        $this->pageRepository = $pageRepository;
    }

    public function getPageByType(string $type): ?Page {
        return $this->pageRepository->findByType($type);
    }
}