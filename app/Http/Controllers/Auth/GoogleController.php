<?php
  
namespace App\Http\Controllers\Auth;
  
// use App\Http\Controllers\Controller;
// use Socialite;
// use Auth;
// use Exception;
// use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
  
class GoogleController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Google login authentication
     *
     * @return void
     */
    public function loginWithGoogle()
    {
        try {

            $googleUser = Socialite::driver('google')->user();
            $user = User::where('google_id', $googleUser->id)->first();

            if($user){
                Auth::login($user);
                return redirect('/home');
            }

            else{
                $createUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => encrypt('test@123')
                ]);

                Auth::login($createUser);
                return redirect('/home');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
