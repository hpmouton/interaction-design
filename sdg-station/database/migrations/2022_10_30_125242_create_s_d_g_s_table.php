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
        Schema::create('s_d_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('sdg_name');
            $table->string('sdg_description');
            $table->foreignId('category_id')->nullable();
            $table->tinyInteger('votes')->default('0')->nullable();
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
        Schema::dropIfExists('s_d_g_s');
    }
};
