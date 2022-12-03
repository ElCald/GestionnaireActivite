<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'taille',
    ]; 

    public function enfant(){
        return $this->belongsToMany(Enfant::class);
    }

    public function horaire() {
        return $this->belongsToMany(Horaire::class);
    }

    protected $table='activites'; 
}
