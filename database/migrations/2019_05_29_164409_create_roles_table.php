<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name', 30)->unique();
            $table->boolean('switch')->default(1);
            $table->timestamps();
        });
        DB::table('roles')->insert(array('id'=>'1','name'=>'Administrador'));
        DB::table('roles')->insert(array('id'=>'2','name'=>'Vendedor'));
    }
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
