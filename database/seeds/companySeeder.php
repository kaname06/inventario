<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class companySeeder extends Seeder
{
    public function run()
    {
        DB::table('company')->insert(
        [
        	'id' => 1,
            'name' => 'alguna por ahi',
			'nit' => '123123',
			'logo' => asset("src/profile_photos/photo.png"),
			'slogan' => '123123',
			'address' => '123123',
			'website' => '123123',
			'mail' => '123123@asd',
			'execution_time' => '12',
			'users' => '4'
        ]);
    }
}
