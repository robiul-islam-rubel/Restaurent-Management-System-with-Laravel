<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;

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
    public function update_food(Request $request,$id)
    {
        $data=food::find($id);



        return view("admin.updatefood",compact('data'));

    }

    public function updatefood(Request $request,$id)
    {
        $data=food::find($id);

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $image->move('foodimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();



    }

    public function reservation(Request $request)
    {
       $data=new reservation;
       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->guest=$request->guest;
       $data->date=$request->date;
       $data->time=$request->time;
       $data->message=$request->message;
       $data->save();

       return redirect()->back();
    }

    public function viewreservation()
    {
        $data=reservation::all();

        return view("admin.adminreservation",compact('data'));
    }

    public function viewchef()
    {
        return view('admin.adminchef');
    }

    public function uploadchef(Request $request)
    {
        $data=new foodchef;


        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('chefimage',$imagename);
        $data->image=$imagename;

        $data->save();

        return redirect()->back();


    }
}
