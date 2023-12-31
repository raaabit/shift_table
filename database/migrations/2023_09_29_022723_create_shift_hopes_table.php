<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\ShiftHopeController;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift_hopes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('shift_pattern_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('kind_id')->nullable()->constrained()->onDelete('cascade');
        });//->nullable()あとで消す
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Shift_hopes');
    }
    

};
