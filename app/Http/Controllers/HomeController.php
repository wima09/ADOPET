<?php

namespace App\Http\Controllers;

use App\Models\Pet;

class HomeController extends Controller
{
    public function index()
    {
        $pets = Pet::with(['category', 'shelter'])
            ->where('status', 'tersedia')
            ->latest()
            ->take(4)
            ->get();

        return view('pages.home', compact('pets'));
    }
}
