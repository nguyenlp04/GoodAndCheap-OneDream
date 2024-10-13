<?php

namespace App\Http\Controllers;

use App\Models\TestDb; // Import model
use Illuminate\Http\Request;

class TestDbController extends Controller
{
    public function index()
    {
        $data = TestDb::all(); // Lấy tất cả dữ liệu từ bảng test_db
        return view('test_db.index', compact('data')); // Trả về view với dữ liệu
    }
}

