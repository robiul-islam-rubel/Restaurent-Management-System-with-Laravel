<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    public function user()
    {
        $user=user::all();
        return view("admin.users",compact('user'));
    }

    public function delete_user($id)
    {
        $user=user::find($id);
        $user->delete();

        return redirect()->back();
    }

    public function foodmenu()
    {
        $data=food::all();
        return view("admin.foodmenu",compact('data'));
    }

    public function uploadfood(Request $request)
    {
        $food=new food;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $image->move('foodimage',$imagename);
        $food->image=$imagename;


        $food->title=$request->title;
        $food->price=$request->price;
        $food->description=$request->description;
        $food->save();


        return redirect()->back();

    }

    public function delete_food($id)
    {
        $data=food::find($id);
        $data->delete();

        return redirect()->back();
    }
}
