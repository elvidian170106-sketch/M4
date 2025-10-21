<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentControllers extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Elvi',
                'major' => 'Sistem Informasi Kota Cerdas',
                'age' => 19,
                'courses' => ['Pemrograman Web', 'Database', 'CloudComputing'],
            ],
            [
                'name' => 'Elvi',
                'major' => 'SIKC',
                'age' => 19,
                'courses' => ['UI/UX', 'Manajemen Proyek', 'IoT'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}