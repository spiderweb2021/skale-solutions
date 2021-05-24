<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
             $table->string('name');
             $table->longText('address');
             $table->unsignedBigInteger('professional_type');
             $table->unsignedBigInteger('professional_industry');
             $table->string('clients_type');
             $table->string('budget');
             $table->string('payout_option');
             $table->string('professional_quality');
             $table->string('time_duration');
             $table->longText('description');
             $table->string('attachment')->nullable();
             $table->unsignedBigInteger('added_by');
             $table->foreign('professional_type')->references('id')->on('professional_types')->onDelete('cascade');
             $table->foreign('professional_industry')->references('id')->on('professional_industries')->onDelete('cascade');
             $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
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
        Schema::dropIfExists('projects');
    }
}
