<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vouncher_Records extends Model
{
    use HasFactory;

    public function vounchers(){
        return $this->belongsTo(Vounchers::class);
    }

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
