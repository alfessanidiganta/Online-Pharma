<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;

class DashboardController extends Controller
{
    public function Index(){
        $users=User::all();
        return view('admin.dashboard',compact('users'));
    }
}
