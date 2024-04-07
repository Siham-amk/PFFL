<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        "prenom",
        'email',
        'password',
        'tele',
        'image',
        'cover',
        
    ];
    public function Annonces(){
        return $this->hasMany(Annonce::class,'idUtilisateur');
    }
}
