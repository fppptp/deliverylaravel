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
        Schema::create('bikers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->unique();
            $table->string('idcard')->unique();
            $table->string('gender');
            $table->date('birthday');
            $table->string('registrationplate')->unique();
            $table->string('brand');
            $table->string('color');
            $table->string('image')->nullable();;
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
        Schema::dropIfExists('bikers');
    }
};
