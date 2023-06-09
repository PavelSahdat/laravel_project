<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->double("vat",5,3);
            $table->double("amount",6,3);
            $table->foreignId("payment_method_id");
            $table->foreign("payment_method_id")->references("id")->on("payment_methods");
            $table->foreignId("member_id");
            $table->foreign("member_id")->references("id")->on("members");
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
        Schema::dropIfExists('payments');
    }
}
