<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->dateTime("in_date_time");
            $table->string("name");
            $table->foreignId("equipment_type_id");
            $table->foreign("equipment_type_id")->references("id")->on("equipment_types");
            $table->enum("condition",array("good","bad","new"))->nullable();
            $table->double("quantity",6,3);
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
        Schema::dropIfExists('equipments');
    }
}
