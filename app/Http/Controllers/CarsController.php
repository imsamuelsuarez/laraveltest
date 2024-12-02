<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;

class CarsController extends Controller
{
    public function index() {
        return response()->json(Car::all());
    }

    public function save(Request $request) {

        $validation = Validator::make($request->all(), [
            'car_name' => 'required|string|max:255', 
            'employer_id' => 'required|integer|exists:employers,id', 
            'user_id' => 'required|integer|exists:users,id'
        ]);

        if($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validation->errors() 
                ], 400);
        }

        Car::create($request->all());

        return response()->json([
       'sucess' => true,
       'data' => request()->all()
   ], 200);
       
    }
}
