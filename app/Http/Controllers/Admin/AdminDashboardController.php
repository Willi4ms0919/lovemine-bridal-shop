<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rental;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $rentals = Rental::latest()->get();
        return view('admin.dashboard', compact('rentals'));
    }
}
