<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('code', 50)->unique();
            $table->string('colour', 30);
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->string('serial', 50);
            $table->string('appointed');
            $table->string('description', 150)->nullable();
            $table->string('state', 50);
            $table->boolean('switch')->default(1);
            $table->string('image', 400);
            $table->string('qr_code',30)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
