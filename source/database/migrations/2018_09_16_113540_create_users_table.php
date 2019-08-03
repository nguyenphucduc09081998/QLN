<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('username', 16);
			$table->string('password', 100);
			$table->string('HoVaTen', 50);
			$table->date('NgaySinh')->nullable();
			$table->string('email');
			$table->string('SoDienThoai')->nullable();
			$table->string('GioiTinh')->nullable(); //1 nam 2 nu 3 khac
			$table->string('DiaChi')->nullable();
			$table->string('ThanhPho')->nullable();
			$table->string('Quan')->nullable();
			$table->integer('Role'); //1 admin 2 user
			$table->integer('Active'); //1 đã active 0 chưa active
			$table->rememberToken();
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoidung');
    }
}
