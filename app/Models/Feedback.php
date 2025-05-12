<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'opinie';

    protected $fillable = ['nazwa', 'treść', 'gwiazdki'];
}
