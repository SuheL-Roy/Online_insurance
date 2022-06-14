<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
             //account holder
            $table->string('policy_holder_name');
            $table->text('holder_image');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('occupation');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('nid_number');
            $table->string('nationality');
            $table->string('religion');
            $table->string('maritial_status');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('annual_income');
            $table->string('mobile')->unique();
            $table->string('email')->unique();


            //nominee part
            $table->string('benificant_name');
            $table->string('banificient_nid');
            $table->string('relation');
            $table->string('benifient_address');



            // account info
          
            $table->integer('category_id');
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
        Schema::dropIfExists('policies');
    }
}
