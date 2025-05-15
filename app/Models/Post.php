<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posty';

    protected $fillable = ['tytuł', 'treść', 'obraz', 'kategoria_id'];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategoria_id');
    }
}
