<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nation',
        'id_number',
        'area_code',
        'address',
        'gender',
        'birthdate',
        'cellphone',
        'housephone',
        'emergency_name',
        'emergency_phone',
        'emergency_relationship',
        'recommendation',
        'shirt_size'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class, 'user_event');
    }

    public function price_packages()
    {
        return $this->belongsToMany(PricePackage::class, 'user_pricepackages');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getPricePackageDescriptionForEvent($event)
    {
        $pricePackageId = $this->price_packages()->whereHas('event', function ($query) use ($event) {
            $query->where('events.id', $event->id);
        })->pluck('price_packages.id')->first();

        if ($pricePackageId) {
            return PricePackage::find($pricePackageId)->description;
        }

        return null;
    }

    public function hasNullAttributes()
    {
        return (is_null($this->nation) || is_null($this->id_number) || is_null($this->area_code) || is_null($this->address) || is_null($this->gender) || is_null($this->birthdate) || is_null($this->cellphone) || is_null($this->housephone || is_null($this->emergency_name) || is_null($this->emergency_phone) || is_null($this->emergency_relationship)));
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $createRules = [
        'nation' => 'required',
        'id_number' => 'required',
        'area_code' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'birthdate' => 'required',
        'cellphone' => 'required',
        'housephone' => 'required',
        'emergency_name' => 'required',
        'emergency_phone' => 'required',
        'emergency_relationship' => 'required',
        'recommendation' => 'required',
        'shirt_size' => 'required',
    ];
}
