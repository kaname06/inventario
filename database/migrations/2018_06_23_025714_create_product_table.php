<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('locate', 100);
            $table->integer('price');
            $table->text('description');
            $table->integer('quantity');
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
        
        Schema::dropIfExists('product');
    }
}
