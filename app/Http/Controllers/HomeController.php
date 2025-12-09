<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_featured', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('home', compact('featuredProducts'));
    }
}
