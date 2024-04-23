<?php

namespace Mahathir\RailMvc\Controller;

use Mahathir\RailMvc\App\View;
use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Repository\PageRepository;
use Mahathir\RailMvc\Repository\PassRepository;
use Mahathir\RailMvc\Service\PassService;
use Mahathir\RailMvc\Service\PageService;

class HomeController
{
    private PassService $passService;
    private PageService $pageService;

    public function __construct()
    {
        $connection = Database::getConnection();
        $passRepository = new PassRepository($connection);
        $this->passService = new PassService($passRepository);

        $pageRepository = new PageRepository($connection);
        $this->pageService = new PageService($pageRepository);
    }

    public function index()
    {
        View::render('Home/index', []);
    }

    public function about()
    {
        $page = $this->pageService->getPageByType('aboutus');
        View::render('Home/about', ['page' => $page]);
    }

    public function viewPass()
    {
        $passes = $this->passService->getAllPasses();
        View::render('Home/view-pass', ['passes' => $passes]);
    }

    public function searchPass()
    {
        $searchData = $_POST['searchdata'];
        $passes = $this->passService->getPassesByNumber($searchData);
        View::render('Home/download-pass', ['passes' => $passes, 'searchData' => $searchData]);
    }

    public function viewPassDetail()
    {
        $passId = $_GET['viewid'];
        $pass = $this->passService->getPassById($passId);
        View::render('Home/view-pass-detail', ['pass' => $pass]);
    }

    // public function downloadPass()
    // {
    //     $pass = $this->passService->getPassesByNumber($)
    //     View::render('Home/download-pass.php', ['pass' => $pass]);
    // }
}