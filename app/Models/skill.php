<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;

    protected $table = 'skill';
    protected  $fillable = [
        'nama_skill',
        'persentase',
    ];
}
