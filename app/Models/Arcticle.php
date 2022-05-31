<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Arcticle extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'name',
        'body',
        'picture'
    ];
    public $table = 'arcticls';
}
