<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Sepaket sama tadi atur route untuk admin
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Route tambahan untuk ke home index habis dikasih template HTML
     */
    public function home()
    {
        return view('home.index');
    }
}
