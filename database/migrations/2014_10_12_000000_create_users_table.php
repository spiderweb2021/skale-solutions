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
            $table->id();
            $table->string('name');
            $table->string('uname')->nullable();
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->enum('gender', ['male', 'female','other'])->default('male');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
			
            $table->string('password');
              $table->string('address')->nullable();
              $table->string('city')->nullable();
              $table->string('state')->nullable();
              $table->string('country')->nullable();
              $table->string('pincode')->nullable();
          
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
