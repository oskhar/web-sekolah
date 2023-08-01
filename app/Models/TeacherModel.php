<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TeacherModel extends Authenticatable
{
    use HasFactory;
    protected $guard = 'teacher';
    protected $table = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'foto_profile',
        'pengalaman_mengajar',
        'jabatan',
        'nomor_telepon',
        'email',
        'password',
        'gender',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}