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
        if (!Schema::hasTable('registers')) {
            Schema::create('registers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('father_name');
                $table->text('date_of_birth');
                $table->string('id_card_no');
                $table->text('id_card_image');
                $table->string('parent_id_card_no');
                $table->text('parent_id_card_image');
                $table->text('bank_account_no');
                $table->string('blood_group')->nullable();
                $table->string('facebook_account');
                $table->text('permanent_address');
                $table->text('agent_address');
                $table->text('cv');
                $table->string('mobile');
                $table->text('image');
                $table->text('email')->unique();
                $table->string('district');
                $table->string('sub_district');
                $table->string('branch')->nullable();
                $table->string('password');
                $table->timestamps();
    
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
