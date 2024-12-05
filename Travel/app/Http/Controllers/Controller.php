<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client;

// Pastikan Anda sudah mengimpor Controller
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Menggunakan connection string dari .env untuk koneksi ke MongoDB
        $client = new Client(env('MONGODB_CONNECTION_STRING'));

        // Pastikan Anda mengganti 'mydb' dengan nama database yang sesuai
        $collection = $client->mydb->users;

        // Menyimpan data user ke MongoDB
        $collection->insertOne([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        // Mengirimkan response sukses
        return response()->json(['message' => 'User registered successfully'], 201);
    }
}
