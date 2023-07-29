<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use SoftDeletes;
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fName',
        'mName',
        'lName',
        'sex',
        'birthDate',
        'civilStatus',
        'street',
        'region',
        'province',
        'municipality',
        'barangay',
        'username',
        'password',
        'email',
        'email_verified',
        'mobileNum',
        'profile',
        'remember_token'
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    protected function role(): Attribute
    {
        return  new Attribute(
            get: fn($value) => ["user","agencyadmin","superadmin"][$value],
        );
    }
    const street = null;
}
