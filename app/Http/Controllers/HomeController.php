<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $data =food::all();
        return view('home',compact('data'));
    }
    public function redirect()
    {
        $data =food::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }
        else 
        {
            return view('home',compact('data'));
        }

    }
    
}
