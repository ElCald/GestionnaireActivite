<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoraireActivite extends Model
{
    use HasFactory;

    protected $fillable = [
        'horaire_id',
        'activite_id',
    ];

    protected $table='activite_horaire'; 
}
