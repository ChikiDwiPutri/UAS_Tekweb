<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokShelter extends Model
{
    use HasFactory;
     public $primaryKey = 'id_kelompok_shelter';
    public $fillable = [
        'nama_kelompok'
    ];
}
