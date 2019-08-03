<?php

use Illuminate\Database\Seeder;

class PhiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('phi')->insert([
			[
				'LoaiPhi' => 'VAT',
				'Gia' =>'10'
			],
			[
				'LoaiPhi' => 'VanChuyen',
				'Gia' =>'10000'
			],
			[
				'LoaiPhi' => 'VanChuyenNhanh',
				'Gia' =>'20000'
			]
		]
		);
    }
}
