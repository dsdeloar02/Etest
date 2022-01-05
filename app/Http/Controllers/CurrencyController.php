<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CurrencyController extends Controller
{
    public function index()
    {
         return Currency::all();
         
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'currencies_name' => 'required|string|between:2,30|unique:currencies',
                'currencies_icon' => 'required|string|between:2,30',
                'currencies_slug' => 'required|string|between:2,30',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }

        // return $validator->validated();

        $currency = Currency::create( $validator->validated() );

        // return $category ;

        if ($currency) {
            return response()->json([
                'success' => true,
                'message' => 'Category created successfully.'
            ], 201);
        }

                 
    }
}
