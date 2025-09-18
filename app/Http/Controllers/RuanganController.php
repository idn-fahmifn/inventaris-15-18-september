<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        return view('admin.ruangan.index');
    }

    public function create()
    {
        return view('admin.ruangan.create');
    }
}
