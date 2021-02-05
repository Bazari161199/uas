<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isi extends Model
{
    protected $fillable = [
        'image', 'judul', 'text',
    ];
}
