<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    //
    public function show(){
        $Annonces=Annonce::paginate(6);

        return view('home',compact("Annonces"));

    }
}
