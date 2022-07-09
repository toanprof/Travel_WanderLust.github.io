<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Exception;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callBackFromGoogle()
    {
        try {

            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            // dd($user);
            // dd($user->user['name']);
            if ($finduser) {
                Auth::login($finduser);
                // dd(Auth::user());
                // dd(Auth::guard('client')->login($finduser));
                toastr()->success("Đăng nhập thành công");
                return redirect('/');
            } else {
                $newUser = User::create([
                    'first_name' => $user->user['family_name'],
                    'last_name' => $user->user['given_name'],
                    'name' => $user->user['name'],
                    'email' => $user->user['email'],
                    'password' => encrypt('123123'),
                    'google_id' => $user->id,
                    'type' => 1,
                ]);
                Auth::login($newUser);
                // $id_user = Socialite::driver('google')->user();
                // dd($id_user->user['id']);
                toastr()->success("Đăng nhập thành công");
                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
