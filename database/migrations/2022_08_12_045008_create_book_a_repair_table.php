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
        Schema::create('book_a_repair', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->longText('address');
            $table->string('city');
            $table->string('devicemodel');
            $table->string('fault');
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
        Schema::dropIfExists('book_a_repair');
    }
};
