<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\SuccessRegister;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function getLoginPage()
    {

        return view('auth.login', [

        ]);
    }


    public function getRegisterPage()
    {
        $categories = Category::all();
        return view('auth.register', [
            'categories' => $categories
        ]);
    }

    public function login(LoginRequest $request)
    {

        $validated = $request->validated();

        if (Auth::attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ], false)) {
            $request->session()->regenerate();

            return redirect()->route('main');
        }

        return back()->withErrors([
            'error' => 'Error'
        ]);
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        Mail::to('vizhuravleva19@gmail.com')->send(new SuccessRegister($user));

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('main');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('main');
    }

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $googleEmail = $googleUser->getEmail();
        $user = User::query()->where('email', $googleEmail)->first();

        if(!$user){
            $user = User::create([
                'email' => $googleEmail,
                'name' => $googleUser->getName(),
            ]);
        }

        Auth::login($user);
        return redirect()->route('main');
    }

    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        $githubEmail = $githubUser->getEmail();
        $user = User::query()->where('email', $githubEmail)->first();

        if(!$user){
            $user = User::create([
                'email' => $githubEmail,
                'name' => $githubUser->getName(),
            ]);
        }

        Auth::login($user);
        return redirect()->route('main');
    }
}
