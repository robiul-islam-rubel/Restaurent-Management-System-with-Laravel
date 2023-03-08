<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
