<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'image', 'name', 'formato', 'description'];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
