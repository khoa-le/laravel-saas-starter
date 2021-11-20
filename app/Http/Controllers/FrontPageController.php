<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home()
    {
        return view('theme::frontpage.home');
    }

    public function products()
    {
        $products = Product::where('status', 1)->get();
        return view('theme::frontpage.products', ['products' => $products]);
    }


    public function product(Product $product)
    {
        return view('theme::frontpage.product-detail', ['product' => $product]);
    }


    public function contact()
    {
        return view('theme::frontpage.contact');
    }
}
