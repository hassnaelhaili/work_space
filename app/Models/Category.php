<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', "description", 'image', 'price_per_hour', 'price_per_day'];

    public function spaces()
    {
        return $this->hasMany(Space::class);
    }
}
