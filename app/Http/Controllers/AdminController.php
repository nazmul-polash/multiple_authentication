<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->where('is_approved', 0)->get();

        return view('superadmin',compact('users'));
    }

    public function user_approved($id)
    {
        User::where('id',$id)->update([
            'is_approved' => 1,
        ]);
        return redirect()->back();
    }

    public function approval_reject($id)
    {
        $deleteUser = User::where('id',$id)->first();
        $deleteUser->delete();
        return redirect()->back();
    }
}
