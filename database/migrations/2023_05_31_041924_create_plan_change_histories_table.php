<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanChangeHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_change_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId("from_plan_id");
            $table->foreign("from_plan_id")->references("id")->on("plans");
            $table->foreignId("to_plan_id");
            $table->foreign("to_plan_id")->references("id")->on("plans");
            $table->foreignId("member_id");
            $table->foreign("member_id")->references("id")->on("members");
            $table->date("date");
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
        Schema::dropIfExists('plan_change_histories');
    }
}
