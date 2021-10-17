<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        // Password nya di enkripsi
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Buat masukin ke db
        User::create($validatedData);

        $request->session()->flash('success', 'Register was successful! Please login');

        return redirect('/login');
    }
}
