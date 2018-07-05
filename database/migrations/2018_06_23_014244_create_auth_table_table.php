<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('dni', 30)->unique();
            $table->string('fname', 100);
            $table->string('sname', 100);
            $table->string('flname', 100);
            $table->string('slname', 100);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->string('password', 100);                    
            $table->string('photo', 200)->default(asset("src/profile_photos/photo.png"));
            $table->rememberToken();
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
        Schema::dropIfExists('auth');        
    }
}
