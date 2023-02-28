<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->integer('truck_id');
            $table->integer('from_state_id');
            $table->integer('to_state_id');
            $table->date('pick_date');
            $table->date('delivery_date');
            $table->bigInteger('miles');
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->boolean('is_tonu');
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
        Schema::dropIfExists('loads');
    }
}
