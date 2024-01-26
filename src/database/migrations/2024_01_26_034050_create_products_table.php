<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()

{

    if (!Schema::hasTable('products')) {

        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('slug')->nullable();

            $table->unsignedBigInteger('categories_id')->nullable();

            $table->integer('price');

            $table->tinyInteger('is_active')->default(1);

            $table->timestamps();


            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');

        });

    }

}
};