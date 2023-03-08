<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static $createRules = [
        'event_name' => 'required',
        'enrollment_limit' => 'required',
        'event_description' => 'required',
        'race_date' => 'required',
        'register_date' => 'required'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_event');
    }

    public function price_packages()
    {
        return $this->hasMany(PricePackage::class);
    }

    public function register(User $user, PricePackage $price_package)
    {
        $user->decrement('credit', $price_package->price);
        $this->users()->attach($user);
        $price_package->users()->attach($user);
        $description = '報名-'. $this->event_name .'賽事/方案-'. $price_package->description;
        activity()->log($description)->causedBy($user);
        return true;
    }

    public function unregister(User $user, PricePackage $price_package)
    {
        $user->increment('credit', $price_package->price);
        $this->users()->detach($user);
        $price_package->users()->detach($user);
        $description = '取消報名-'. $this->event_name .'賽事/方案-'. $price_package->description;
        activity()->log($description)->causedBy($user);
        return true;
    }

    public function hasRegistrationPassedToday()
    {
        $registerDate = Carbon::parse($this->register_date);
        return $registerDate->isPast();
    }

    public function isUserRegistered()
    {
        return $this->users->contains(auth()->user());
    }

    public function isFull()
    {
        return $this->users()->count() >= $this->enrollment_limit;
    }
}
