<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo')->nullable();
            $table->string('name')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('working_days')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('closed')->nullable();
            $table->string('days_closed')->nullable();
            $table->text('map')->nullable();
            $table->string('brochure')->nullable();
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
        Schema::dropIfExists('settings');
    }
}