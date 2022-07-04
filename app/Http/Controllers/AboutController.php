<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class AboutController extends Controller
{
       public function index(Request $request)
    {
        $products = Product::with(['galleries'])->latest()->get();

        return view('pages.frontend.about', compact('products'));
    }

       public function favourite(Request $request)
    {
        $products = Product::with(['galleries'])->latest()->get();

        return view('pages.frontend.favourite', compact('products'));
    }

    public function kalkulator()
    {
        return view('pages.frontend.kalkulator');
    }
}
