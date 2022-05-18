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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("name", 15);
            $table->string("email", 15);
            $table->string("address_street", 25);
            $table->string("address_city", 15);
            $table->string("address_zipcode", 15);
            $table->string("phone", 15)->nullable();
            $table->string("company_name", 25);
            $table->string("company_bs", 30)->nullable();
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
        Schema::dropIfExists('clients');
    }
};
