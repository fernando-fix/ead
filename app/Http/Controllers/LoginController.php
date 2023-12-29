<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'min:8'],
        ], [
            'email.required' => 'O campo email e obrigatório',
            'email.string' => 'O campo email deve ser somente caracteres',
            'email.max' => 'O campo email deve ter no maximo :max caracteres',
            'email.email' => 'O campo email deve ser um email valido',
            'password.required' => 'O campo senha e obrigatório',
            'password.min' => 'O campo senha deve ter no minimo :min caracteres',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->withInput()->withErrors([
                'password' => 'Email ou senha invalidos',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
