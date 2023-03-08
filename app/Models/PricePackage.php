<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'description',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_pricepackages');
    }

    public function isPriceLessThanUserCredit()
    {
        return $this->price < auth()->user()->credit;
    }

    public static $createRules = [
        'price' => 'required',
        'description' => 'required'
    ];

}
