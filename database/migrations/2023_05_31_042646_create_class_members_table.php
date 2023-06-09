<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId("member_id");
            $table->foreign("member_id")->references("id")->on("members");
            $table->foreignId("class_id");
            $table->foreign("class_id")->references("id")->on("classes");
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
        Schema::dropIfExists('class_members');
    }
}
