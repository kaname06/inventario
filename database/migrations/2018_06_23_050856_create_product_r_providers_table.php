<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_r_providers', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('price_buy');

            $table->unsignedInteger('product_id');            
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade')->onUpdate('cascade'); 

            $table->unsignedInteger('providers_id');
            $table->foreign('providers_id')->references('id')->on('providers')->onDelete('cascade')->onUpdate('cascade'); 
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
        $table->dropForeign(['product_id']);
        $table->dropColumn('product_id');

        $table->dropForeign(['providers_id']);
        $table->dropColumn('providers_id');

        Schema::dropIfExists('product_r_providers');
    }
}
