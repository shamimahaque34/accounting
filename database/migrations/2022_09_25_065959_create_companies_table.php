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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_bangla');
            $table->string('email');
            $table->string('logo');
            $table->string('phone');
            $table->string('tax_number');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('language_id');
            $table->text('address');
            $table->string('town');
            $table->string('postal_code');
            $table->string('state');
            $table->string('website');
            $table->string('country');
            $table->boolean('enabled')->default(1);
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
        Schema::dropIfExists('companies');
    }
};
