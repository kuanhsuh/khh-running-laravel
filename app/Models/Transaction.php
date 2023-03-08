<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_five_digit',
        'transaction_date',
        'amount',
        'description',
        'confirmed',
        'user_id',
    ];

    public static $createRules = [
        'amount' => 'required',
        'last_five_digit' => 'required',
        'transaction_date' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
