<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Tạo các biến dựa trên mảng thông tin
        $name = 'Dang Thi Quynh';
        $age = 20;
        $school = 'Đại học Dien luc';

        return view('contact', compact('name', 'age', 'school'));
    }
    
     public function multiplication($n)
    {
        if (!is_numeric($n)) {
            return view('multiplication', ['error' => 'Giá trị không hợp lệ']);
        }

        return view('multiplication', compact('n'));
    }
}
