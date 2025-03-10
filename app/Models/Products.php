<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function favorites(){
        return $this->hasOne(Favorites::class);
    }
    public function category(){
        return $this->belongsTo(Categories::class);
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
