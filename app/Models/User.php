<?php

namespace App\Models;

use App\Models\Admin\Sale;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'role',
        'name',
        'lastname',
        'country',
        'type_document',
        'document',
        'birthday',
        'gender',
        'information',
        'avatar',
        'email',
        'membership',
        'password',
        'birth_department', 'birth_province', 'birth_district', 'department', 'province', 'district', 'address',
        'landline', 'telephone', 'profession', 'partner_type', 'debt',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
