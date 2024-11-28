<?php
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::post('/register', function (Request $request) {
    // Validasi data
    $validated = $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Simpan ke database (contoh)
    \App\Models\User::create([
        'username' => $validated['username'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
    ]);

    return response()->json(['message' => 'Registration successful!']);
});

Route::post('/register', [UserController::class, 'register']);
