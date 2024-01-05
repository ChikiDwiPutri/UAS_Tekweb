<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    use HasFactory;
    //protected $table="petani";
    public $primaryKey = 'id_hewan';
    public $fillable = [
        'kode hewan','nama', 'phone', 'email', 'bukti transfer', 'id_kelompok_shelter',
    ];
}
