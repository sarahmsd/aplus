<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    const FACEBOOK_TYPE = 'facebook';
    public function handleFacebookRedirect()
    {
      return Socialite::driver(static::FACEBOOK_TYPE)->redirect();
    }

    public function handleFacebookCallback()
    {
          try {

            $user = Socialite::driver(static::FACEBOOK_TYPE)->user();
            $userExiste = User::where('oauth_id', $user->getId())->where('oauth_type', static::FACEBOOK_TYPE)->first();

            if ($userExiste) {
                Auth::login($userExiste);

                return redirect()->route('home');
            }else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'oauth_id' => $user->getId(),
                    'oauth_type' => static::FACEBOOK_TYPE,
                    'password' => Hash::make($user->getId()),
                ]);


                Auth::login($newUser);

                return redirect()->route('choix');
            }

        } catch (Exception $e) {
          dd($e);
        }
    }
}
