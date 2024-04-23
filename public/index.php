<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mahathir\RailMvc\Controller\ContactController;
use Mahathir\RailMvc\Controller\HomeController;
use Mahathir\RailMvc\App\Router;
use Mahathir\RailMvc\Config\Database;

Database::getConnection();

// Home Controller
Router::add('GET', '/', HomeController::class, 'index', []);
Router::add('GET', '/about', HomeController::class, 'about', []);
Router::add('GET', '/download-pass', HomeController::class, 'viewPass', []);
Router::add('POST', '/download-pass', HomeController::class, 'searchPass', []);
Router::add('GET', '/view-pass-detail', HomeController::class, 'viewPassDetail', []);
Router::add('POST', '/contact', ContactController::class, 'sendMessage', []);
Router::add('GET', '/contact', ContactController::class, 'index', []);

// Admin Controller

Router::run();