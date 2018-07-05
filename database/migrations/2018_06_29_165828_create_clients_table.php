<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('dni', 30)->unique();
            $table->string('name', 250);
            $table->text('address');
            $table->string('phone', 20);
            $table->string('mail');
            $table->string('ranking', 100);
            $table->datetime('date_b');
            $table->unsignedInteger('company');
            $table->foreign('company')->references('id')->on('company')->onDelete('cascade')->onUpdate('cascade');
            // $table->timestamps();
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

        Schema::dropIfExists('clients');
    }
}
