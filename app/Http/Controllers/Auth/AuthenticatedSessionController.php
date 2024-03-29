<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $role = $request->user()->role;
        switch ($role) {
            case 'admin':
                return redirect()->intended('/admin/dashboard');
                break;
            case 'receiver':
                return redirect()->intended('/receiver/dashboard');
                break;
            case 'guest':
                return redirect()->intended('/guest/dashboard');
                break;
            default:
                // Default code (if the role doesn't match any case) 
                return redirect()->intended(RouteServiceProvider::HOME);
                break;
        };
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
