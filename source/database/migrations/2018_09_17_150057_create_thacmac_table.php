<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThacmacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thacmac', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idMatHang',50);
			$table->string('idKhachHang',50);
			$table->string('NoiDung',1000);
			$table->string('TraLoi',1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thacmac');
    }
}
