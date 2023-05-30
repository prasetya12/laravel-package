<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function show()
    {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }
}