<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profil";

    protected $fillable = [
        'nama_lengkap',
        'email',
        'no_tel',
        'alamat',
        'tentang_saya',
        'facebook',
        'x',
        'linkedin',
        'instagram',
        'gambar',

    ];
}
