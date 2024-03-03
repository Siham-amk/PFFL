<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function show(){
        return view('login.show');

    }
    public function login(Request $request){
        // dd($request);
        // $values=$request->post();
        // dd($values);
        $email=$request->email;
        $password=$request->password;
        $password =$request->password;
        
        

        $credentials=["email"=>$email,"password"=>$password];


        // dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            # code...
            $request->session()->regenerate();
            return to_route('home');
        }else{
            return back()->withErrors(['email'=>"Email ou mot de passe incorrecte"])->onlyInput('email');

        }


        
    }
    public function create(){
        return view("login.create");
    }
    public function store(Request $request){

        // $email=$request->email;
        // $password = Hash::make($request->password);
        // $nom=$request->nom;
        // $prenom=$request->email;
        // $tele=$request->tele;


        $formFiels=$request->validate([
            'nom'=>'required|min:3',
            'prenom'=>'required|min:3',
            'password'=>'required|min:8|confirmed',
            'tele'=>'required',
            'email'=>'required|email|unique:Utilisateurs',

        ]);

        $formFiels['password']=Hash::make($request->password);

        Utilisateur::create($formFiels
            // [
            // 'nom'=>$nom,
            // 'prenom'=>$prenom,

            // 'password'=>$password,
            // 'email'=>$email,
            // 'tele'=>$tele
        // ]
    );


        return redirect()->route('login.show')->with("success","votre compte a été bien crée.");
    }
    public function logout(){
        Session::flush();
        Auth::logout();

        return to_route("login.login")->with("success","vous etes bien déconnecté");
    }
}
