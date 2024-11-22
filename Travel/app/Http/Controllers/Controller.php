<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriptionController extends Controller
{
    // Menangani penyimpanan email untuk subscription
    public function store(Request $request)
    {
        // Validasi input email
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Simpan email ke database
        Subscriber::create(['email' => $request->email]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        // Validasi input email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Periksa apakah email ada di database
        $subscriber = Subscriber::where('email', $request->email)->first();

        if ($subscriber) {
            // Jika email ditemukan, tampilkan pesan sukses
            return redirect()->back()->with('success', 'Login successful!');
        } else {
            // Jika email tidak ditemukan, tampilkan pesan error
            return redirect()->back()->withErrors(['email' => 'Email not found. Please subscribe first.']);
        }
    }
}
