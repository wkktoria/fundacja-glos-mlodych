<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'kategorie';

    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class, 'kategoria_id');
    }
}
