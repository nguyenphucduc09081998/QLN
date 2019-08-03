<?php

use Illuminate\Database\Seeder;

class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
			'Role' => 1,
			'HoVaTen' => 'admin',
			'Active' =>1
        ]);
    }
}
