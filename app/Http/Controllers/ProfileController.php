<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Event;
use Spatie\Activitylog\Models\Activity;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        request()->validate(User::$createRules);
        $request->user()->save();
        $request->user()->update([
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

        return Redirect::route('dashboard')->with('success', '個人資料已更新');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function dashboard(Request $request) {
        $user = Auth()->user();
        $events = Event::latest()->paginate(5);
        $transactions = $user->transactions()->paginate(5);
        $activities = Activity::causedBy(auth()->user())->latest()->paginate(15);
        return view('dashboard', [
            'user' => $request->user(),
            'events' => $events,
            'transactions' => $transactions,
            'activities' => $activities,
        ]);
    }
}
