<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'wiadomości';

    protected $fillable = ['nazwa', 'firma', 'telefon', 'email', 'temat', 'treść', 'zgoda'];
}
