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
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'cetagories_name' => 'required|string|between:2,30',
                'cetagories_icon' => 'required',
            ]
        );


        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }

        $category = Cetagory::findOrFail($id)->update(
            array_merge(
                $validator->validated()
            )
        );

        if ($category) {
            return response()->json([
                'success' => true,
                'message' => 'Category updated successfully.'
            ], 201);
        }
    }
    public function destory($id)
    {
        $category = Cetagory::findOrFail($id);

       if($category)
       {
           $category->delete();
           return response()->json(
                ['message'=>'Category deleted successfully'],
                422
            );
       } 
    }
}
