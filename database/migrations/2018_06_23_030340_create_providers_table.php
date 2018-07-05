<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('address', 100);
            $table->string('phone', 30);
            $table->string('mail', 100);
            $table->char('state', 1);
            $table->unsignedInteger('company');
            $table->foreign('company')->references('id')->on('company')->onDelete('cascade')->onUpdate('cascade');
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
        $table->dropForeign(['company']);
        $table->dropColumn('company');

        Schema::dropIfExists('providers');
    }
}
