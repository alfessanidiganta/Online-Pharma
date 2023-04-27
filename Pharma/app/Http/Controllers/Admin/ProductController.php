<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function Index(){
        $products=Product::all();
        return view('admin.allproducts',compact('products'));
    }
    public function AddProduct(){
        $categories = category::latest()->get();
        return view('admin.addproduct',compact('categories'));
    }
    public function EditProduct(){
        return view('admin.editproduct');
    }
    public function StoreProduct(request $request){

        $request->validate([
            'product_name'=> 'required | unique:products',
            'price'=>'required',
            'quantity'=>'required',
            'product_long_des'=>'required',
            'product_short_des'=>'required',
            'product_img'=>'required',
        ]);

        $image=$request->file('product_img');
        $img_name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $reuest ->product_img->move(public_path('upload'),$img_name);
        $img_url='upload/'.$img_name;

        product::insert([
            'product_name'=>$request->category_name,
            'price'=>$request->category_name,
            'quantity'=>$request->category_name,
            'product_long_des'=>$request->category_name,
            'product_short_des'=>$request->category_name,
            'product_img'=>$request->category_name,
            'slug'=>str_replace(' ','-',$request->category_name)
        ]);
        return redirect()->route('allproducts')->with('message','Added Successfully');
    }
}

