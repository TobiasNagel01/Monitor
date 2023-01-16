<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pings', function (Blueprint $table) {
            $table->uuid('ping_id')->primary();
            $table->uuid('monitor_id');
            $table->string('state');
            $table->integer('sequence');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('monitor_id')->references('monitor_id')->on('monitors')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pings');
    }
};
