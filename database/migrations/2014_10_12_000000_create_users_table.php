<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('business_name');
            $table->string('business_number');
            $table->string('business_address1');
            $table->string('business_address2')->nullable();
            $table->string('business_city');
            $table->string('business_region')->nullable();
            $table->string('business_zipcode');
            $table->string('business_type');
            $table->string('business_category');
            $table->string('business_subcategory')->nullable();
            $table->string('business_url')->nullable();
            $table->string('business_registration')->nullable();
            $table->string('date_registered')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality');
            $table->string('id_name');
            $table->string('id_no')->nullable();
            $table->string('birthdate');
            $table->string('home_address1');
            $table->string('home_address2')->nullable();
            $table->string('home_city');
            $table->string('home_region')->nullable();
            $table->string('home_zipcode');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('verified')->default(false);


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
        Schema::dropIfExists('users');
    }
}
