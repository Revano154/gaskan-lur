<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $client = new Client(env('MONGODB_CONNECTION_STRING'));
        $collection = $client->mydb->users;

        $collection->insertOne([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return response()->json(['message' => 'User registered successfully'], 201);
    }
}
