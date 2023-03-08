<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $admin = Auth()->user();
        $register_user = User::find($id);
        if($admin->hasRole('Admin')) {
            return view('users.show', compact('register_user'));
        } else {
            session()->flash('error', '你沒有權限');
            return redirect('/dashboard');
        }
    }
}
