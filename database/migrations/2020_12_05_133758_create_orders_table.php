<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("client_id");
            $table->foreign('client_id')->references('id')->on('clients')->onDelete("cascade");
            $table->string("flight_to");
            $table->integer("total_price")->default(0);
            $table->integer("paid")->default(0);
            $table->boolean("stage1")->default(false);
            $table->boolean("stage2")->default(false);
            $table->boolean("stage3")->default(false);
            $table->string("invoice")->nullable();
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
        Schema::dropIfExists('orders');
    }
}
