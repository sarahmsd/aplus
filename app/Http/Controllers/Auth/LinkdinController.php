<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LinkdinController extends Controller
{
    const LINKDIN_TYPE = 'linkedin';
    public function handleLinkdinRedirect()
    {
      return Socialite::driver(static::LINKDIN_TYPE)->redirect();
    }

    public function handleLinkdinCallback()
    {
          try {

            $user = Socialite::driver(static::LINKDIN_TYPE)->user();
            $userExiste = User::where('oauth_id', $user->getId())->where('oauth_type', static::LINKDIN_TYPE)->first();

            if ($userExiste) {
                Auth::login($userExiste);

                return redirect()->route('home');
            }else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'oauth_id' => $user->getId(),
                    'oauth_type' => static::LINKDIN_TYPE,
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
