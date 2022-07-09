<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHoaDonRequest;
use App\Models\HoaDon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HoaDonController extends Controller
{
    public function createHoaDon(CreateHoaDonRequest $request)
    {
        $hoaDon = HoaDon::create([
            'hash'    => Str::uuid(),
        ]);

        $hoaDon->ma_hoa_don = 'HD' . (10000 + $hoaDon->id);
        $hoaDon->loai_thanh_toan = $request->loai_thanh_toan;
        $hoaDon->ngay_bat_dau    = $request->ngay_bat_dau;
        $hoaDon->ngay_ket_thuc   = $request->ngay_ket_thuc;
        $hoaDon->id_khach_hang   = $request->id_khach_hang;
        $hoaDon->don_gia         = $request->don_gia;
        $hoaDon->thanh_tien      = $request->thanh_tien;
        $hoaDon->save();
        return response()->json([
            'status'  =>  true,
        ]);
    }
    public function getData(){

        $user= Auth::guard('client')->user()? Auth::guard('client')->user() : Auth::user() ;
        if($user){
            $data = HoaDon::where('id_khach_hang',$user->id)->get();
            return view('booking.my_booking.index',compact('data'));
        }else{
            return view('booking.my_booking.index');
        }

     }
}
