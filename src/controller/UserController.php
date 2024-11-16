<?php

namespace AMCC\MVC\Controller;

use AMCC\MVC\Model\Mahasiswa;
use AMCC\MVC\Model\Student;
use AMCC\MVC\View\Page;

class UserController
{
    public function index()
    {
        $data = [
            new Student(1, 'Reza Andyah Wijaya', 'XII-MIPA 7'),
            new Student(2, 'Aghita Rizky Aldiansyah', 'XII-MIPA 7'),
            new Student(2, 'Rizky Mahfud', 'XII-MIPA 7'),
        ];

        Page::render('user/dashboard', [
            'page' => 'Dashboard',
            'students' => $data,
        ]);
    }
}
