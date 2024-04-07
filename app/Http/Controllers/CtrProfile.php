<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;

class CtrProfile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        // return view('profile.show');


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
        $profile = Utilisateur::findorfail($id);
        return view('profile.show',['profile' => $profile]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $profile = Utilisateur::findorfail($id);
        return view('profile.edit',['editprofile' => $profile]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email',
            'tele'=>'required|numeric',
            'password'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg,svg|max:10240',
            'cover'=>'image|mimes:png,jpg,jpeg,svg|max:10240',


    ]);
        // $request->validate(['prix'=>'required','numeric']);

        //
        $profile = Utilisateur::findorfail($id);

        $profile->nom = $request->input('nom');
        $profile->prenom = $request->input('prenom');
        $profile->email = $request->input('email');
        $profile->tele = $request->input('tele');
        $profile->password = Hash::make($request->input('password'));
        ;
        if ($request->hasFile('image')) {
            # code...
        $profile->image = $request->file('image')->store('profile','public');

        }
        if ($request->hasFile('cover')) {
            # code...
        $profile->cover = $request->file('cover')->store('cover','public');


        }




        $profile->save();
        return redirect()->route('profile.show',$profile->id
        // ,[ "msg"=>'Produit ajoute avec succes']
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
