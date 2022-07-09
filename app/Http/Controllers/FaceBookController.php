<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FaceBookController extends Controller
{
    public function loginWithFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function callBackFromFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            dd($user);
            $finduser = User::where('facebook_id', $user->id)->first();
            // dd($user->user['name']);
            if ($finduser) {
                Auth::login($finduser);
                // dd(Auth::user());
                // dd(Auth::guard('client')->login($finduser));
                return redirect('/');
            } else {
                $newUser = User::create([
                    'ho_lot' => $user->user['family_name'],
                    'ten' => $user->user['given_name'],
                    'name' => $user->user['name'],
                    'email' => $user->user['email'],
                    'password' => encrypt('123123'),
                    'facebook_id' => $user->id,
                ]);
                Auth::login($newUser);
                // $id_user = Socialite::driver('google')->user();
                // dd($id_user->user['id']);
                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
