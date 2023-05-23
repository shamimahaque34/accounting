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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_type');
            $table->string('company_id');
            $table->string('tax_id');
            $table->string('company_ibs_id');
            $table->string('color_charge_cal')->nullable();
            $table->string('first_page_charge_cal')->nullable();
            $table->string('commercial_charge_cal')->nullable();
            $table->string('vat_cal')->nullable();
            $table->string('tax_cal')->nullable();
            $table->string('total_taka_cal')->nullable();
            $table->string('payable_taka_cal')->nullable();
            $table->string('sender_email');
            $table->string('invoice_date');
            $table->string('invoice_number');
            $table->string('order_date');
            $table->string('memo_number');
            $table->string('heading');
            $table->string('position');
            $table->string('published_date');
            $table->string('inch')->nullable();
            $table->string('rate');
            $table->integer('customer_id');
            $table->string('customer_name');
            $table->string('customer_email')->nullable();
            $table->string('customer_tax_number')->nullable();
            $table->string('customer_phone')->nullable();
            $table->text('customer_address')->nullable();
            $table->text('color_charge')->nullable();
            $table->text('first_page_charge')->nullable();
            $table->text('back_page_charge')->nullable();
            $table->text('commercial_charge')->nullable();
            $table->text('commision')->nullable();
            $table->text('vat')->nullable();
            $table->text('total');
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
        Schema::dropIfExists('invoices');
    }
};
