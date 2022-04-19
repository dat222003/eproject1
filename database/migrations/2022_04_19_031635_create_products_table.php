<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryid')->references('id')->on('category')->onDelete('cascade');
            $table->float('price', 8, 2);
            $table->string('name', '20');
            $table->float('weight', 8, 2);
            $table->string('description', '500');
            $table->string('brand', '30');
            $table->string('country_of_origin', '20');
            $table->date('expiration_date');
            $table->string('manufacturer', '30');
            $table->text('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
