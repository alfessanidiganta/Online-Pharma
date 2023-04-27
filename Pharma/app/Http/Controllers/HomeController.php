<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;

class HomeController extends Controller
{
    public function Index(){
        $products=Product::all();
        return view('user_template.layout.template',compact('products'));
    }
}
