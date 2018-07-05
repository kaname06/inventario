<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->datetime('date_fac');
            $table->string('secuence', 60)->unique();
            $table->bigInteger('total');
            $table->bigInteger('neto');
            $table->float('iva', 4);
            $table->string('dni_seller', 30);
            $table->unsignedInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
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
        $table->dropForeign('id_client');
        $table->dropColumn('id_client');

        Schema::dropIfExists('bill');
    }
}
