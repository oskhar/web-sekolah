<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

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
}
