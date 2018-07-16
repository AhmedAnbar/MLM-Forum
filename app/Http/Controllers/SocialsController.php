<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;

class SocialsController extends Controller
{
	
    public function auth($provider){
    	return SocialAuth::authorize($provider);
    }

    public function auth_callback($provider){
    	SocialAuth::login($provider, function($user, $detials){
    		$user->avatar = $detials->avatar;
    		$user->email = $detials->email;
    		$user->name = $detials->full_name;

    		$user->save();
    	});

    	return redirect('/forum');
    }
}
