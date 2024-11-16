<?php

namespace AMCC\MVC\Controller;

use AMCC\MVC\Model\Mahasiswa;
use AMCC\MVC\Model\Student;
use AMCC\MVC\View\Page;

class AdminController
{
    public function index()
    {
        Page::render('admin/dashboard', [
            'user' => 'Admin',
            'page' => 'Dashboard',
        ]);
    }

    public function attendance()
    {
        $data = [
            new Student(1, 'Reza Andyah Wijaya', 'XII-MIPA 7'),
            new Student(2, 'Aghita Rizky Aldiansyah', 'XII-MIPA 7'),
            new Student(2, 'Rizky Mahfud', 'XII-MIPA 7'),
        ];

        Page::render('admin/attendance', [
            'page' => 'Attendance',
            'students' => $data,
        ]);
    }

    public function dashboard()
    {
        $data = [
            new Student(1, 'Reza Andyah Wijaya', 'XII-MIPA 7'),
            new Student(2, 'Aghita Rizky Aldiansyah', 'XII-MIPA 7'),
            new Student(2, 'Rizky Mahfud', 'XII-MIPA 7'),
        ];

        Page::render('admin/dashboard', [
            'page' => 'Dashboard',
            'students' => $data,
        ]);
    }

    public function student()
    {
        $data = Student::All();

        Page::render('admin/student', [
            'page' => 'Student',
            'students' => $data,
        ]);
    }

    public function listMahasiswa()
    {
        $data = [
            new Mahasiswa('Ahmad Basikal', '22.99.9999'),
            new Mahasiswa('Tulung Agung', '22.77.7777'),
        ];

        Page::render('list_mahasiswa', [
            'mahasiswa' => $data,
        ]);
    }
}
