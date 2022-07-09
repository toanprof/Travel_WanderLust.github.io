<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Jobs\sendMailActiveJob;
use App\Mail\MailKichHoatUser;
use App\Models\Client;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Prophecy\Doubler\Generator\TypeHintReference;
use App\Models\User;


class ClientController extends Controller
{
    public function login()
    {
        return view('user.login');
    }
    public function register()
    {
        return view('user.register');
    }
    public function logout()
    {
        if (Auth::guard('client')->check()) {
            Auth::guard("client")->logout();
        } else {

            Auth::logout();
        }
        return redirect('/');
    }
    public function registerAction(UserRegisterRequest $request)
    {
        $parts = explode(" ", $request->name);
        if (count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        } else {
            $firstname = $request->name;
            $lastname = " ";
        }
        $check_mail = User::where('email', $request->email)->get();
        $check = true;
        foreach ($check_mail as $key => $value) {
            if(count($check_mail) > 0 && $value->google_id != null){
                $check = true;
            } else {
                $check = false;
                break;
            }
        }
        if($check){
            $data = $request->all();
            $data['hash'] = Str::uuid();
            $data['first_name'] = $firstname;
            $data['last_name'] = $lastname;
            $data['password'] = bcrypt($request->password);
            User::create($data);
            sendMailActiveJob::dispatch($request->email, $request->full_name, $data['hash']);
            return response()->json(['status' => 1]);
        }else{
            return response()->json(['status' => 2]);
        }

        // Mail::to($request->email)->send(new MailKichHoatUser(
        //     $request->ho_va_ten,
        //     $data['hash'],
        //     "KÍCH HOẠT TÀI KHOẢN",
        // ));
    }
    public function loginAction(UserLoginRequest $request)
    {
        $data = $request->only('email', 'password');
        $check = Auth::guard('client')->attempt($data);
        if ($check) {
            $agent = Auth::guard('client')->user();
            if ($agent->is_email) {
                return response()->json(['status' => 2]);
            } else {
                Auth::guard('client')->logout();
                return response()->json(['status' => 1]);
            }
        } else {
            return  response()->json(['status' => 0]);
        }
    }
    public function active($hash)
    {
        $data = User::where('hash', $hash)->first();
        if ($data->is_email) {
            toastr()->warning('Tài khoản của bạn đã được kích hoạt trước đó!');
        } else {
            $data->is_email = 1;
            $data->save();
            toastr()->success('Tài khoản của bạn đã được kích hoạt!');
        }
        return redirect('/user/login');
    }
    public function viewUser()
    {
        $data = User::all();
        return response()->json([
            'list'         => $data,
        ]);
    }
    public function destroy($id)
    {
        $client = User::find($id);
        if ($client) {
            $client->delete();
            return response()->json([
                'status'  =>  true,
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
    public function viewBooking()
    {
        if (Auth::guard('client')->check()) {
            $data = Auth::guard('client')->user();
        } else {
            $data = [];
        }
        // dd($data);
        return view('booking.hotel.hotel_booking', compact('data'));
    }
    public function test()
    {
        $apikey = 'feb132531808f88e47b5cc3d698f4111';
        $location = 'Da Nang';
        $link =
            'http://api.weatherstack.com/current?access_key=' . $apikey . '&query=' . $location;
        // $queryString = http_build_query([
        // 'access_key'=> $apikey,
        // 'query'=> $location,
        // ]);
        // $ch = curl_init(sprintf('%s?%s', 'https://api.weatherstack.com/current', $queryString));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // dd($link);
        return response()->json([
            'apikey'
        ]);

        // $json = curl_exec($ch);
        // curl_close($ch);

        // $api_result = json_decode($json, true);
        // dd($api_result);

        // echo "Current temperature in $location is {$api_result['current']['temperature']}℃", PHP_EOL;
    }
}
