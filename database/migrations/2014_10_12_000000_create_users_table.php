<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name', 150);
            $table->string('document', 20)->nullable();
            $table->string('nro_document', 35)->nullable();
            $table->string('address', 250)->nullable();
            $table->string('telephone', 25)->nullable();
            $table->boolean('switch')->default(1);
            $table->string('email', 250)->unique();
            $table->string('user')->unique();
            $table->string('password');
            $table->string('image', 400);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');

        
    }
}
