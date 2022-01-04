<?php

namespace App\Http\Controllers;

use App\Models\Cetagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CetagoryController extends Controller
{
    public function index()
    {
         return Cetagory::all();
         
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'cetagories_name' => 'required|string|between:2,30|unique:cetagories',
                'cetagories_icon' => 'required|string|between:2,30',
                'cetagories_slug' => 'required|string|between:2,30',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }

        // return $validator->validated();

        $category = Cetagory::create( $validator->validated() );

        // return $category ;

        if ($category) {
            return response()->json([
                'success' => true,
                'message' => 'Category created successfully.'
            ], 201);
        }

                 
    }
}
