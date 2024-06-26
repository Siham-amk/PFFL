<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\AnnonceImage;
use App\Models\AnnonceLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CtrAnnonce extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Annonces=Annonce::paginate(6);
        $AnnonceLike=AnnonceLike::all();
        return view('annonce.index',["Annonces"=>$Annonces,"AnnonceLike"=>$AnnonceLike]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'prix' => 'required|numeric',
            'ville' => 'required',
            'adresse' => 'required',
            'nbchambre' => 'required|numeric',
            'surface' => 'required|numeric',
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
        ]);
    
        $annonce = new Annonce();
        $annonce->type = $request->input('type');
        $annonce->prix = $request->input('prix');
        $annonce->ville = $request->input('ville');
        $annonce->adresse = $request->input('adresse');
        $annonce->nbchambre = $request->input('nbchambre');
        $annonce->surface = $request->input('surface');
        $annonce->idUtilisateur = Auth::id();
    
        $annonce->save();
    
        $images = $request->file('images');
    
        foreach ($images as $image) {
            $path = $image->store('annonce', 'public');
    
            $annonceImage = new AnnonceImage();
            $annonceImage->image = $path;
            $annonceImage->idAnnonce = $annonce->id;
            $annonceImage->save();
        }

        // $AnnonceLike = new AnnonceLike();

        // $AnnonceLike->id_utilisateur = Auth::id();
        // $AnnonceLike->id_Annonce = $annonce->id;
        // $AnnonceLike->save();




    
        return redirect()->route('annonce.index')->with('success', 'Annonce ajoutée avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $Annonce=Annonce::findOrFail($id);

        return view("Annonce.show",compact('Annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $annonce = Annonce::findorfail($id);
        return view('annonce.edit',['editannonce' => $annonce]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate([
            'type' => 'required',
            'prix' => 'required|numeric',
            'ville' => 'required',
            'adresse' => 'required',
            'nbchambre' => 'required|numeric',
            'surface' => 'required|numeric',
            'images' => 'array|min:1',
            'images.*' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
        ]);
    
        $annonce = Annonce::findOrFail($id);

        $annonce->type = $request->input('type');
        $annonce->prix = $request->input('prix');
        $annonce->ville = $request->input('ville');
        $annonce->adresse = $request->input('adresse');
        $annonce->nbchambre = $request->input('nbchambre');
        $annonce->surface = $request->input('surface');
        $annonce->idUtilisateur = Auth::id();
    
        $annonce->save();
    
        if ($request->hasFile('images')) {
        $images = $request->file('images');

    
        foreach ($images as $image) {
            $path = $image->store('annonce', 'public');
    
            $annonceImage = new AnnonceImage();
            $annonceImage->image = $path;
            $annonceImage->idAnnonce = $annonce->id;
            $annonceImage->save();
        }}

        return redirect()->route('profile.show',$annonce->idUtilisateur);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $annonceAsupprimer = Annonce::findOrFail($id);
        $annonceAsupprimer->delete();
        return redirect()->route('profile.show',[Auth::id()])->with("success","L'annonce a été supprimé avec succès");
        // return redirect()->back();
        
    }
}
