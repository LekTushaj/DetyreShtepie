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
        Schema::create('terminis', function (Blueprint $table) {
            $table->id();
            $table->string('emri')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
         //   $table->string('date')->nullable();
            $table->string('doctor_id')->nullable();
            $table->string('emri_doktorrit')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('terminis');
    }
};
