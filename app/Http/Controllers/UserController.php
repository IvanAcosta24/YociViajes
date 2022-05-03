<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        return redirect('login')->with('success', 'Agregado con éxito!');
    }
    public function log_in(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        if (!Auth::validate($credentials)) {
            return redirect()->back()->withErrors('Correo o contraseña incorrectos');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated();
    }
    public function authenticated()
    {
        return redirect('welcome');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('login');
    }
}
