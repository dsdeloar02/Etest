<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubcetagoryController extends Controller
{
    public function index()
    {
         return SubCategory::all();
                  
    }
    public function store(Request $request)
    {

        return $request;

                 
    }
}
