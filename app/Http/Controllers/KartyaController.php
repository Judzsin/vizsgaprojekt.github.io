<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kartya;

class KartyaController extends Controller
{
    public function create()
    {
        // Létrehozunk egy új kártyát és elmentjük
        $kartya1 = new Kartya();
        $kartya1->Kártyanév = 'Battle of Legends';
        $kartya1->Kártyakép = 'kartyak/Battle of Legends.png';
        $kartya1->Ár = 1000;
        $kartya1->save();

        // Létrehozunk egy másik új kártyát és elmentjük
        $kartya2 = new Kartya();
        $kartya2->Kártyanév = 'Bringing On!';
        $kartya2->Kártyakép = 'kartyak/Bringing On!.png';
        $kartya2->Ár = 1100;
        $kartya2->save();

        // Jelzés a sikeres mentésről
        return "Kártyák sikeresen mentve.";
    }


}

