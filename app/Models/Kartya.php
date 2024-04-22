<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartya extends Model
{
    protected $table = 'kartyak';
    protected $primaryKey='id';
    protected $fillable=['Kártyanév','Kártyakép','Ár'];
    
        
       


}
