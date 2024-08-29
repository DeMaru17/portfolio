<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $table = 'certification';
    protected $fillable = [
        'nama_sertifikat',
        'penyelenggara',
        'tanggal_sertifikat',

    ];
}
