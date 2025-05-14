<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $table = 'praktyki';

    protected $fillable = [
        'nazwa',
        'opis',
        'obowiązki',
        'narzędzia',
        'obraz'
    ];
}
