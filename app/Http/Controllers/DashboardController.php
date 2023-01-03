<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'deskripsi' => 'Dashboard'
        ];

        return view('dashboard.index', $data);
    }
}
