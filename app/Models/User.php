<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'image',
        'fathers_name',
        'mothers_name',
        'present_address',
        'parmanent_address',
        'date_of_birth',
        'nationality',
        'religion',
        'nid',
        'birth_certificate',
        'blood_group',
        'gender',
        'edu_qualification',
        'experience',
        'staff_id',
        'staff_type',
        'department_id',
        'designation_id',
        'office_zone',
        'joining_date',
        'discharge_date',
        'machine_id',
        'description',
        'marital_status',
        'show_password',
        'password',
        'email_verified_at',
        'created_by',
        'updated_by',
        'status',
        'is_deleted',
        'menu',
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
        'password' => 'hashed',
    ];
}
