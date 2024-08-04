<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Arrivals;

class ShopController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $arrivals = Arrivals::all();
        $data = compact('products', 'arrivals');

        return view('frontend.shop')->with($data);
    }
}
