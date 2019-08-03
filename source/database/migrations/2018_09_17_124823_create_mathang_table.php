<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mathang', function (Blueprint $table) {
            $table->increments('id');
			$table->string('TenMatHang',50);
			$table->string('MoTa',1000);
			$table->integer('Gia');
			$table->string('XuatXu',16);
			$table->integer('SoLuongTon');
			$table->string('idLoaiMatHang',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mathang');
    }
}
