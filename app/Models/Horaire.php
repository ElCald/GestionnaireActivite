<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'jour',
        'heureDebut',
        'heureFin',
    ]; 

    public function activite() {
        return $this->belongsToMany(Activite::class);
    }
}
