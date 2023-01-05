<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'User',
            'deskripsi' => 'Manajemen User',
            'list_user' => User::all()
        ];

        return view('user.index', $data);
    }
}
