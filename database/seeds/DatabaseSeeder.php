<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(companySeeder::class);
        $this->call(rolSeeder::class);
        $this->call(authSeeder::class);        
    }
}
