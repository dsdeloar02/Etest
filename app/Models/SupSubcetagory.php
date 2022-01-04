<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupSubcetagory extends Model
{
    use HasFactory;

    protected $table='sup_subcategories';

    protected $fillable = [
        'sup_subcategories_name',
        'sup_subcategories_icon',
        'sup_subcategories_slug',
        'subcategories_id',
    ];
}
