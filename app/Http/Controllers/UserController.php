<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user', [ 
            'users' => User::paginate(10)
        ]);
    }

    public function store(Request $request){

         $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',

        ]);

        if($validator->fails()){

            return response()->json([
                'errors' => $validator->errors()->getMessages()], 400
            );
        }

        //Create


        return response()->json([
            'success' => 'User created successfully'
        ], 201);

    }
    public function update(Request $request){

         $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required',

        ]);

        if($validator->fails()){

            return response()->json([
                'errors' => $validator->errors()->getMessages()], 400
            );
        }

        //Create

        return response()->json([
            'success' => 'User updated successfully'
        ], 201);

    }
}
