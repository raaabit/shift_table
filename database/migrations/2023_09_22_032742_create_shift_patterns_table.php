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
        Schema::create('shift_patterns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('day_of_week');
            $table->foreignId('kind_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shift_patterns');
    }
};
