<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function brands(){
        return $this->belongsTo(Brand::class);
    }

    public function stocks(){
        return $this->hasOne(Stock::class);
    }

    public function vouncher_records(){
        return $this->hasOne(Vouncher_records::class);
    }
}
