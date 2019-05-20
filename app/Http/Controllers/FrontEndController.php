<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontEndController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

   public function ecomm()
    {
      return view('ecomm.index', ['products' => Product::paginate(6)]);
    }
}
