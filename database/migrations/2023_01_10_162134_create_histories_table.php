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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('direction_id');
            $table->string('order_name');
            $table->text('more')->nullable();
            $table->string('example')->nullable();
            $table->date('completion_date')->nullable();
            $table->integer('price');
            $table->text('workers')->nullable();
            $table->integer('worker_id')->default(0);
            $table->boolean('status')->default(false);
            $table->integer('degree')->nullable();
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
        Schema::dropIfExists('histories');
    }
};
