<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupSubcetagory;
use Illuminate\Support\Facades\Validator;

class SupSubcetagoryController extends Controller
{
    public function index()
    {
         return SupSubcetagory::all();
                  
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'category_name' => 'required|string|between:2,30|unique:categories',
                'category_icon' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }

        $category = Category::create(
            array_merge(
                $validator->validated()
            )
        );

        if ($category) {
            return response()->json([
                'success' => true,
                'message' => 'Category created successfully.'
            ], 201);
        }

                 
    }
}
