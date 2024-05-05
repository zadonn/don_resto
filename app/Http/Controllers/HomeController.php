<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pelanggan;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home', [
            'title' => 'Dashboard',
            'jumlahPelanggan' => Pelanggan::count(),
            'jumlahMenu' => Menu::count(),
        ]);
    }
}
