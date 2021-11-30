<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Redirect ke provider masing masing untuk mendapat autentikasi
     */
    public function redirectToProvider($provider){ // $provider = /login/{provider}/
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Memperoleh informasi User dari provider
     */
    public function handleProviderCallback($provider){
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        return redirect('/home');
    }

    /**
     * Jika user telah terdaftar maka return user
     * Selain itu, user akan di daftarkan
     */
    private function findOrCreateUser($user ,$provider){
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser){
            return $authUser;
        } else {
            return User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => '', // default kosong
                'provider' => $provider,
                'provider_id' => $user->id,
            ]);
        }

    }
}
