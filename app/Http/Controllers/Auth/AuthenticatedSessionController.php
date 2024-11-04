<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Individuelle;
use App\Models\Une;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function accueil(): View
    {
        /* return view('auth.login'); */
        $une = Une::where("status", "!=", null)->first();
        $today = date('Y-m-d');
        $count_today = Individuelle::where("created_at", "LIKE",  "{$today}%")->count();
        if ($count_today <= "0") {
            $title = "nouvelle demande aujourd'hui";
        } else {
            $title = "nouvelles demandes aujourd'hui";
        }
        
        return view('accueil', compact('une', 'count_today', 'title'));
    }
    
    public function create(): View
    {
        /* return view('auth.login'); */
        return view('user.login-page');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        Alert::success('Bienvenue ! '  . Auth::user()->firstname . ' ' . Auth::user()->name, 'Vous êtes bien connecté');

        return redirect()->intended(RouteServiceProvider::HOME);
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
