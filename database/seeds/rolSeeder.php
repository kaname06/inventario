<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;
use Illuminate\Support\Facades\DB;

class rolSeeder extends Seeder
{
    public function run()
    {
        Rol::create(
        [
        	'id' => 1,
        	'name' => 'ADMIN',
        	'company_id' => 1
        ]);
    }
}
