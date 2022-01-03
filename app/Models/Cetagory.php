<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetagory extends Model
{
    use HasFactory;

    protected $table='cetagories';

    protected $fillable = [
        'cetagories_name',
        'cetagories_icon',
        'cetagories_slug',
    ];
}
