<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ], [
            'name.required' => 'O campo nome e obrigatório',
            'name.string' => 'O campo nome deve ser somente caracteres',
            'name.min' => 'O campo nome deve ter no minimo :min caracteres',
            'name.max' => 'O campo nome deve ter no maximo :max caracteres',
            'email.required' => 'O campo email e obrigatório',
            'email.string' => 'O campo email deve ser somente caracteres',
            'email.max' => 'O campo email deve ter no maximo :max caracteres',
            'email.email' => 'O campo email deve ser um email valido',
            'email.unique' => 'Este e-mail já esta sendo usado',
            'password.required' => 'O campo senha e obrigatório',
            'password.confirmed' => 'As senhas devem ser iguais',
            'password.min' => 'O campo senha deve ter no minimo :min caracteres',
            'password_confirmation.required' => 'O campo confirmar senha e obrigatório',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email', 'password'));
        $request->session()->regenerate();;

        return redirect()->route('home');
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ], [
            'name.required' => 'O campo nome e obrigatório',
            'name.string' => 'O campo nome deve ser somente caracteres',
            'name.min' => 'O campo nome deve ter no minimo :min caracteres',
            'name.max' => 'O campo nome deve ter no maximo :max caracteres',
            'email.required' => 'O campo email e obrigatório',
            'email.string' => 'O campo email deve ser somente caracteres',
            'email.max' => 'O campo email deve ter no maximo :max caracteres',
            'email.email' => 'O campo email deve ser um email valido',
            'email.unique' => 'Este e-mail já esta sendo usado',
        ]);

        if ($request->password) {
            $request->validate([
                'password' => ['required', 'confirmed', 'min:8'],
                'password_confirmation' => ['required'],
            ], [
                'password.required' => 'O campo senha e obrigatório',
                'password.confirmed' => 'As senhas devem ser iguais',
                'password.min' => 'O campo senha deve ter no minimo :min caracteres',
                'password_confirmation.required' => 'O campo confirmar senha e obrigatório',
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->theme = $request->theme;
        $user->is_teacher = $request->is_teacher;

        // return $user;

        $user->save();

        return redirect()->back();
    }
}
