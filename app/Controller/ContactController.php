<?php

namespace Mahathir\RailMvc\App\Controller;

use Mahathir\RailMvc\App\View;
use Mahathir\RailMvc\Service\ContactService;
use Mahathir\RailMvc\Service\PageService;

class ContactController
{
    private $contactService;
    private $pageService;

    public function __construct(ContactService $contactService, PageService $pageService)
    {
        $this->contactService = $contactService;
        $this->pageService = $pageService;
    }

    public function index()
    {
        $page = $this->pageService->getPageByType('contact');
        View::render('Home/contact.php', ['page' => $page]);
    }

    public function sendMessage()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $this->contactService->saveMessage($name, $email, $message);

        View::redirect('/contact');
    }
}