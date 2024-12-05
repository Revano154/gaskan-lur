<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MongoDB\Client;
use App\Models\User;  // Pastikan menggunakan model yang tepat jika ada

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Masukkan data ke koleksi 'users' MongoDB
        $client = new Client(env('MONGODB_CONNECTION_STRING'));
        $collection = $client->PraUAS->users;

        // Insert user baru ke MongoDB
        $collection->insertOne([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),  // Enkripsi password
        ]);

        return response()->json(['message' => 'User registered successfully'], 201);
    }
}


