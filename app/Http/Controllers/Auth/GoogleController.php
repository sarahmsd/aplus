<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
    const GOOGLE_TYPE = 'google';
    public function handleGoogleRedirect(Type $var = null)
    {
      return Socialite::driver(static::GOOGLE_TYPE)->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        //dd($request);
          try {

            $user = Socialite::driver(static::GOOGLE_TYPE)->user();
            $userExiste = User::where('oauth_id', $user->getId())->where('oauth_type', static::GOOGLE_TYPE)->first();

            if ($userExiste) {
                Auth::login($userExiste);

                return redirect()->route('home');
            }else {
               // dd($user->getName());
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'oauth_id' => $user->getId(),
                    'oauth_type' => static::GOOGLE_TYPE,
                    'password' => Hash::make($user->getId()),
                    'profil' => $request->profil,
                ]);


                Auth::login($newUser);

                return redirect()->route('choix');
            }

        } catch (Exception $e) {
          dd($e);
        }
    }
}
