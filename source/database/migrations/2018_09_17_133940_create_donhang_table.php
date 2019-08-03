<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id');
			$table->date('NgayDatHang');
			$table->date('NgayGiaoHang');
			$table->string('idNguoiDung',50)->nullable();;
			$table->string('HoVaTen');
			$table->string('Email');
			$table->string('DiaChi');
			$table->string('SoDienThoai');
			$table->integer('TongTien');
			$table->integer('VAT');
			$table->integer('PhiVanChuyen');
			$table->string('TrangThai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
