<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontEndController extends Controller
{
    // public function index()
    // {
    //     // return view('index', ['products' => Product::paginate(3)]);
    //     return view('welcome');
    // }
    public function shopView()
    {
        return view('ecom.index', ['products' => Product::paginate(3)]);
    }
    public function singleProduct($id)
    {
        return view('ecom.single', ['product' => Product::find($id)]);
    }
}
