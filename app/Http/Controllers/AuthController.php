<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\SuccessRegister;
use App\Models\Category;
use App\Models\User;
use App\Models\UserInformation;
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
        $user = User::query()->where('provider', 'google')->where('social_id', $googleUser->getId())->first();

        if(!$user){
            $user = User::query()->create([
                'name' => $googleUser->getName(),
                'provider' => 'google',
                'social_id' => $googleUser->getId(),

            ]);
        }

        $userInformation = $user->information;
        if(!$userInformation){
            UserInformation::query()->create([
                'user_id' => $user->id,
                'first_name' => $googleUser->user['given_name'],
                'last_name' => $googleUser->user['family_name'],
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
        $user = User::query()->where('provider', 'github')->where('social_id',$githubUser->getId())->first();

        if(!$user){
            $user = User::query()->create([
                'name' => $githubUser->getName(),
                'provider' => 'github',
                'social_id' => $githubUser->getId(),
            ]);
        }

        $userInformation = $user->information;
        if(!$userInformation){
            UserInformation::query()->create([
                'user_id' => $user->id,
                'first_name' => $githubUser->user['name'],
                'city' => $githubUser->user['location'],
            ]);
        }

        Auth::login($user);
        return redirect()->route('main');
    }
}
