<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Socialite, Auth;

use App\User;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider){
        $profile = Socialite::driver($provider)->user();
        //dd($profile);
        $user = User::where('fb_id', $profile->id)->first();
        if($user){
            Auth::logInUsingId($user->id, true);
            $message = "Thanks for logging in ".$this->getFirstName($user->name)." Your email address (".$user->email.") has now been registered with all known porn websites and Nigerian spam lists";
            return redirect('/')->with('message-success', $message);
        }
        else{
            //user not found so create one
            $user = new User;
            //sort the avatar
            $avatar = preg_replace('/\?[^?]*$/', '', $profile->avatar);

            $user->email = $profile->email;
            $user->fb_id = $profile->id;
            $user->name = $profile->name;
            $user->avatar = $avatar . '?type=square';
            $user->password = bcrypt(str_random(40));

            $user->save();

            Auth::logInUsingId($user->id, true);
            $message = "Thanks for logging in ".$this->getFirstName($user->name)." Your email address (".$user->email.") has now been registered with all known porn websites and Nigerian spam lists";
            return redirect('/')->with('message-success', $message);
        }
    }

    private function getFirstName($fullname){
        $arr = explode(' ', $fullname);
        return $arr[0];
    }
}
