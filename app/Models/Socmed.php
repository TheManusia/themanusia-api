<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socmed extends Model
{
    protected $table = 'socmed';

    protected $fillable = [
        'text',
        'link',
        'show',
    ];

    protected $primaryKey = 'id';
}
