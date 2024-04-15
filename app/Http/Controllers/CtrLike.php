<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\AnnonceLike;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CtrLike extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userId = Auth::id(); // Récupère l'ID de l'utilisateur connecté
        $utilisateur = Utilisateur::findOrFail($userId); // Trouve l'utilisateur par son ID
        $annoncesAimees = $utilisateur->likes()->paginate(10); // Récupère les annonces aimées par cet utilisateur
    
        return view('annoncelike.index', ['annoncesAimees' => $annoncesAimees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        


    }
    public function like(string $id)
    {
        $Idliker = auth()->user()->id;
        $annonce = Annonce::findOrFail($id);
        $liker = Utilisateur::findOrFail($Idliker);
        

    
        // Attach the like to the current user for the specified annonce
        $liker->likes()->attach($annonce);
        $Annonces=Annonce::paginate(16);
        $AnnonceLike=AnnonceLike::all();

        // return view('annonce.index',["Annonces"=>$Annonces,"AnnonceLike"=>$AnnonceLike]);
        return redirect()->back();
    }
    
    public function dislike(string $id)
    {
        $Idliker = auth()->user()->id;

        $annonce = Annonce::findOrFail($id);
        $liker = Utilisateur::findOrFail($Idliker);
    
        // Detach the like from the current user for the specified annonce
        $liker->likes()->detach($annonce);
        $Annonces=Annonce::paginate(16);
        $AnnonceLike=AnnonceLike::all();

        // return view('annonce.index',["Annonces"=>$Annonces,"AnnonceLike"=>$AnnonceLike]);
        return redirect()->back();
    }

  
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $AnnonceLikeAction = AnnonceLike::findorfail($id);
        $AnnonceLikeAction->like =!$AnnonceLikeAction->like ;

        $AnnonceLikeAction->save();

        return redirect()->route('annonce.index'
    );
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
