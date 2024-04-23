<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mahathir\RailMvc\App\Controller\HomeController;
use Mahathir\RailMvc\App\Router;
use Mahathir\RailMvc\Config\Database;

Database::getConnection();

// Home Controller
Router::add('GET', '/', HomeController::class, 'index', []);
Router::add('GET', '/about', HomeController::class, 'about', []);
Router::add('GET', '/view-pass', HomeController::class, 'viewPass', []);
Router::add('POST', '/view-pass', HomeController::class, 'searchPass', []);
Router::add('GET', '/view-pass-detail', HomeController::class, 'viewPassDetail', []);

// Admin Controller
// Tambahkan rute untuk AdminController sesuai kebutuhan

Router::run();