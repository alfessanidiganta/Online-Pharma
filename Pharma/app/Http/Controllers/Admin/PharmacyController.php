<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function Index(){
        return view('admin.allpharmacy');
    }
    public function AddPharmacy(){
        return view('admin.addpharmacy');
    }
    public function EditPharmacy(){
        return view('admin.editpharmacy');
    }
}
