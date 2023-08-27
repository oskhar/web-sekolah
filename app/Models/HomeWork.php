<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWork extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $table = 'home_works';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'deskripsi',
        'gambar',
        'tanggal_dikumpulkan',
        'gedung',
    ];
}