<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = 'hoa_dons';
    protected $fillable = [
          'ma_hoa_don',
          'loai_thanh_toan',
          'tinh_trang',
          'hash',
          'ngay_bat_dau',
          'ngay_ket_thuc',
          'id_khach_hang',
          'don_gia',
          'thanh_tien',
          'type_id'
    ];
}
