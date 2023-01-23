<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    const TWITTER_TYPE = 'twitter';
    public function handleTwitterRedirect(Type $var = null)
    {
      return Socialite::driver(static::TWITTER_TYPE)->redirect();
    }

    public function handleTWITTERCallback(Type $var = null)
    {
          try {

            $user = Socialite::driver(static::TWITTER_TYPE)->user();
            $userExiste = User::where('oauth_id', $user->id)->where('oauth_type', static::TWITTER_TYPE)->first();

            if ($userExiste) {
                Auth::login($userExiste);

                return redirect()->route('home');
            }else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => static::TWITTER_TYPE,
                    'password' => Hash::make($user->id),
                ]);

                //  AddingTeam::dispatch($newUser);

                //  $newUser->switchTeam($team = $newUser->ownedTeams()->create([
                // 'name' => $user->name. "'s Team",
                // 'personal_team' => false

                //  ]));

                Auth::login($userExiste);

                return redirect()->route('home');
            }

        } catch (Exception $e) {
          dd($e);
        }
    }

}
