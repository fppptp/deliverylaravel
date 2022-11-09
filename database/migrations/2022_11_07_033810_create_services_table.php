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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('customer_fullname');
            $table->string('customer_phone');
            $table->string('parcel_type');
            $table->float('parcel_weight');
            $table->float('parcel_size');
            $table->string('source_name');
            $table->string('source_phone');
            $table->string('source_address');
            $table->string('destination_name');
            $table->string('destination_phone');
            $table->string('destination_address');
            $table->datetime('date_pickup');
            $table->datetime('date_deliver');
            $table->float('amount');
            $table->string('pay_type');
            $table->foreignId('biker_id')->constrained();
            $table->foreignId('doctype_id')->constrained();
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
        Schema::dropIfExists('services');
    }
};
