<?php

// panggil autoload agar semua class dapat di load secara otomatis
require_once __DIR__ . '/../vendor/autoload.php';

use AMCC\MVC\Controller\AdminController;
use AMCC\MVC\Controller\UserController;
use AMCC\MVC\Route\Router;

// buat route
Router::add('GET', '/', UserController::class, 'index');

Router::add('GET', '/admin/dashboard', AdminController::class, 'dashboard');
Router::add('GET', '/admin/attendance', AdminController::class, 'attendance');
Router::add('GET', '/admin/student', AdminController::class, 'student');

// jalankan route
Router::run();
