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
        Schema::create('register_stages', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->boolean('stage1')->default(true);
            $table->boolean('stage2')->default(false);
            $table->boolean('stage3')->default(false);
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
        Schema::dropIfExists('register_stages');
    }
};
