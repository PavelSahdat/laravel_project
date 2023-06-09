<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("address")->nullable();
            $table->string("emergency_contact")->nullable();
            $table->enum("status",array("active","suspended","expired"));
            $table->date("dob");
            $table->enum("gender",array("male","female","other"));
            $table->string("fitness_goals")->nullable();
            $table->foreignId("plan_id");
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->date("start_date");
            $table->date("end_date"); 
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
        Schema::dropIfExists('members');
    }
}
