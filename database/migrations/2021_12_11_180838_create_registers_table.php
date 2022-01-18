<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('signature');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_village');
            $table->string('present_post');
            $table->string('present_upazila');
            $table->string('present_zila');
            $table->string('parmanent_village');
            $table->string('parmanent_post');
            $table->string('parmanent_upazila');
            $table->string('parmanent_zila');
            $table->string('age');
            $table->string('occupation');
            $table->string('religion');
            $table->string('nid_no');
            $table->string('nationality');
            $table->string('institution');
            $table->string('institution_address');
            $table->string('bank_account');
            $table->string('bank_address');
            $table->string('mobile_no');
            $table->string('phone_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('registers');
    }
}
