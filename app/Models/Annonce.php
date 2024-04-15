<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        "ville",
        'adresse',
        'surface',
        'prix',
        'idUtilisateur',
        'nbchambre',
        
    ];
    public function AnnonceImages(){
        return $this->hasMany(AnnonceImage::class,'idAnnonce');
    }
    public function likes()
{
    return $this->belongsToMany(Utilisateur::class, 'annonce_likes', 'id_annonce', 'id_utilisateur')->withTimestamps();
}

}
