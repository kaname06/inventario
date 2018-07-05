<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('id_bill', 60);
            $table->unsignedInteger('id_product');
            $table->integer('quantity');
            $table->foreign('id_bill')->references('secuence')->on('bill')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_product')->references('id')->on('product')->onDelete('cascade')->onUpdate('cascade');
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
        $table->dropForeign('id_bill');
        $table->dropColumn('id_bill');

        $table->dropForeign('id_product');
        $table->dropColumn('id_product');

        Schema::dropIfExists('billing');
    }
}
