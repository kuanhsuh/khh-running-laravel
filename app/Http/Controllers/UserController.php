<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $orderBy = $request->get('orderBy', 'area_code');
        $orderDirection = $request->get('orderDirection', 'asc');
        $users = User::orderBy($orderBy, $orderDirection);
        return view('users.index', compact('users', 'orderBy', 'orderDirection'));
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

    public function edit()
    {
        $user = auth()->user();
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        request()->validate(User::$createRules);
        $user->update([
            'nation' => request('nation'),
            'id_number' => request('id_number'),
            'area_code' => request('area_code'),
            'address' => request('address'),
            'gender' => request('gender'),
            'birthdate' => request('birthdate'),
            'cellphone' => request('cellphone'),
            'housephone' => request('housephone'),
            'emergency_name' => request('emergency_name'),
            'emergency_phone' => request('emergency_phone'),
            'emergency_relationship' => request('emergency_relationship'),
            'recommendation' => request('recommendation'),
            'shirt_size' => request('shirt_size'),
            'pickup_location' => request('pickup_location'),
        ]);
        return redirect()->route('users.show', ['user' => $user->id])->with('success', '個人資料已更新');
    }
}
