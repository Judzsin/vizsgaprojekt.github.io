<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kartya;

class KartyaController extends Controller
{
    public function create()
    {
        $kartya = new Kartya();
        $kartya->Kártyanév = 'Battle of Legends';
        $kartya->Kártyakép = 'kartyak/Battle of Legends.png';
        $kartya->Ár = 1000;

        if ($kartya->save()) {
            // A mentés sikeres volt
            echo "A kártya sikeresen mentve.";
        } else {
            // A mentés sikertelen volt, kezeljük a hibát
            // Például naplózd a hibát vagy dobjon kivételt
            echo "A kártya mentése sikertelen.";
        }
    }




}

