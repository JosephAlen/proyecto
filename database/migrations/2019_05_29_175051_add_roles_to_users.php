<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRolesToUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) 
        {
            $table->unsignedInteger('id_roles');
            $table->foreign('id_roles')->references('id')->on('roles');
        });
    }
    public function down()
    {
        Schema::table('users', function (Blueprint $table) 
        {
            $table->dropForeign(['id_roles']);
            $table->dropColumn('id_roles');
        });
    }
}
