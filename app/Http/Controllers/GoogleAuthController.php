<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }
    
    public function callback() {
        $googleUser = Socialite::driver('google')->user();
        
        // Check if user exists by email first
        $user = User::where('email', $googleUser->email)->first();
        
        if ($user) {
            // Update existing user with Google ID
            $user->update(['google_id' => $googleUser->id]);
        } else {
            // Create new user
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'password' => Str::password(12),
                'email_verified_at' => now()
            ]);
        }
        
        Auth::login($user);
        return redirect('/dashboard');
    }
}