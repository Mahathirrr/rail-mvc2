<?php

namespace Mahathir\RailMvc\App\Controller;

use Mahathir\RailMvc\App\View;
use Mahathir\RailMvc\Service\PassService;
use Mahathir\RailMvc\Service\PageService;

class HomeController
{
    private $passService;
    private $pageService;

    public function __construct(PassService $passService, PageService $pageService)
    {
        $this->passService = $passService;
        $this->pageService = $pageService;
    }

    public function index()
    {
        $passes = $this->passService->getAllPasses();
        View::render('Home/index.php', ['passes' => $passes]);
    }

    public function about()
    {
        $page = $this->pageService->getPageByType('aboutus');
        View::render('Home/about.php', ['page' => $page]);
    }

    public function viewPass()
    {
        View::render('Home/view-pass.php');
    }

    public function searchPass()
    {
        $searchData = $_POST['searchdata'];
        $passes = $this->passService->searchPasses($searchData);
        View::render('Home/view-pass.php', ['passes' => $passes, 'searchData' => $searchData]);
    }

    public function viewPassDetail()
    {
        $passId = $_GET['viewid'];
        $pass = $this->passService->getPassById($passId);
        View::render('Home/view-pass-detail.php', ['pass' => $pass]);
    }

    public function downloadPass()
    {
        // Tambahkan logika untuk mengunduh pass
        View::render('Home/download-pass.php');
    }
}