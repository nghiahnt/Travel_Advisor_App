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
        Schema::create('contentplaces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',30)->unique();
            $table->string('place',50);
            $table->string('image',30);
            $table->string('content',1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contentplaces');
    }
};
