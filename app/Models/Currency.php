<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

        
    protected $table='currencies';

    protected $fillable = [
        'currencies_name',
        'currencies_icon',
        'currencies_slug',
    ];
}
