<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contractors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contractors', function (Blueprint $table) {
            $table->id();
            $table->string('contractor_name');
            $table->string('proprietor');
            $table->string('address');
            $table->string('phone_number');
            $table->string('number_owner_name');
            $table->string('telephone_number');
            $table->string('email_address');
            $table->string('contractor_status');
            $table->rememberToken();
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
         Schema::dropIfExists('contractors');
    }
}
