<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartya extends Model
{
    protected $fillable = [
        'Kártyanév', 'Kártyakép', 'Ár',
    ];

    // Táblanév explicit megadása
    protected $table = 'kartya';


}
