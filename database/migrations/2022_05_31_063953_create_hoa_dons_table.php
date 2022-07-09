<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hoa_don')->nullable();
            $table->integer('loai_thanh_toan')->nullable();
            $table->integer('tinh_trang')->default(0);
            $table->date('ngay_bat_dau')->nullable();
            $table->date('ngay_ket_thuc')->nullable();
            $table->string('id_khach_hang')->nullable();
            $table->integer('type_id')->nullable()->default(0);
            $table->string('hash');
            $table->double('don_gia')->nullable();
            $table->double('thanh_tien')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('hoa_dons');
    }
}
