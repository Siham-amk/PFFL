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
    public function show_One(Request $request){
        $id=$request->id;

        $Annonce=Annonce::findOrFail($id);
        // dd($request->id);

        return view("Annonce.show",compact('Annonce'));

    }
}
