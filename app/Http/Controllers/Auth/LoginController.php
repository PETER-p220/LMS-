<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Redirect the user to the Google authentication page
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle the Google callback and log the user in
    public function handleGoogleCallback()
    {
        // Get user info from Google
        $googleUser = Socialite::driver('google')->user();

        // Find or create the user in your database
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
            ]);
        }

        // Log the user in
        Auth::login($user, true);

        // Redirect to the dashboard or wherever you want
        return redirect()->route('homepage');
    }
}
