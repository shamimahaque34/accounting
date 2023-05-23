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
        Schema::create('company_ibs', function (Blueprint $table) {
            $table->id();
            $table->string('account_name');
            $table->string('account_no');
            $table->string('bank_name');
            $table->string('bank_branch_name');
            $table->string('tin_no');
            $table->string('vat_bin_no');
            $table->string('contact_number_and_bkash_number');
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
        Schema::dropIfExists('company_ibs');
    }
};
