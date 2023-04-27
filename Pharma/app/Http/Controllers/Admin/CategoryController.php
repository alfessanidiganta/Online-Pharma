<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;

class CategoryController extends Controller
{
    public function Index(){
        $categories=category::latest()->get();
        return view('admin.allcategory',compact('categories'));
    }
    public function AddCategory(){
        return view('admin.addcategory');
    }
    public function AddSubCategory(){
        return view('admin.addsubcategory');
    }

    public function StoreCategory(Request $request){
        $request->validate([
            'category_name'=> 'required | unique:categories'
        ]);

        category::insert([
            'category_name'=>$request->category_name,
            'slug'=>str_replace(' ','-',$request->category_name)
        ]);
        return redirect()->route('allcategory')->with('message','Added Successfully');
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name'=> 'required | unique:subcategories',
            'category_id '=>'required'
        ]);
        $category_id =request->$category_id;
        $category_name = category::where('id',$category_id)->value('category_name');

        subcategory::insert([
            'subcategory_name'=>$request->subcategory_name,
            'slug'=>str_replace(' ','-',$request->slugcategory_name),
            'category_id'=>$category_id,
            'category_name'=>$category_name
        ]);

        category::where ('id', $category_id)->increment('subcategory_count',1);

        return redirect()->route('allcategory')->with('message','Sub category Added Successfully');
    }
    
}
