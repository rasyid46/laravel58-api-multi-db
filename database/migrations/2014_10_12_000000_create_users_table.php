<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('_iduser');
            $table->string('email');
            $table->string('username')->nullable(); 
            $table->string('password'); 
            $table->integer('role_id'); 
            $table->date('last_login')->nullable(); 
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::connection('pgsql')->create('prole', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role_name');
            $table->string('slug'); 
        });

        Schema::connection('mongodb')->create('muser', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('phone');
            $table->string('first_name');
            $table->string('last_name'); 
            $table->string('address');
            $table->string('born_date')->nullable(); 
            $table->string('born_place')->nullable(); 
            $table->text('photo')->nullable();
            $table->string('npwp')->nullable();
            $table->softDeletes();
        });


       


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('user');
        Schema::connection('pgsql')->dropIfExists('prole');
        Schema::connection('mongodb')->dropIfExists('muser');

    }
}
