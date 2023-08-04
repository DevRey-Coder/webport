<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vounchers extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function vouncher_records(){
        return $this->hasMany(Vouncher_records::class);
    }
}
