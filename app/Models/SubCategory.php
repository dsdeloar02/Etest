<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table='subcategories';

    protected $fillable = [
        'subcetagory_name',
        'subcetagory_icon',
        'subcetagory_slug',
        'cetagories_id',
    ];

}
