<?php

namespace Mahathir\RailMvc\Controller;

use Mahathir\RailMvc\App\View;
use Mahathir\RailMvc\Config\Database;
use Mahathir\RailMvc\Model\ContactRequest;
use Mahathir\RailMvc\Repository\ContactRepository;
use Mahathir\RailMvc\Repository\PageRepository;
use Mahathir\RailMvc\Service\ContactService;
use Mahathir\RailMvc\Service\PageService;

class ContactController
{
    private ContactService $contactService;
    private PageService $pageService;

    public function __construct()
    {
        $connection = Database::getConnection();
        $contactRepository = new ContactRepository($connection);
        $this->contactService = new ContactService($contactRepository);

        $pageRepository = new PageRepository($connection);
        $this->pageService = new PageService($pageRepository);
    }

    public function index()
    {
        $page = $this->pageService->getPageByType('contact');
        View::render('Home/contact.php', ['page' => $page]);
    }

    public function sendMessage()
    {
        $request = new ContactRequest();
        $request->Name = $_POST['name'];
        $request->Email = $_POST['email'];
        $request->Message = $_POST['message'];

        $this->contactService->saveMessage($request);

        View::redirect('Home/contact');
    }
}