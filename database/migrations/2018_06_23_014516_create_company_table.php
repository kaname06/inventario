<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('nit', 100);
            $table->string('logo', 200);
            $table->string('slogan', 80);
            $table->string('address', 100);
            $table->string('website', 50);
            $table->string('mail', 100)->unique();
            $table->integer('execution_time');
            $table->integer('users');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
