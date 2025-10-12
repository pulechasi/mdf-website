<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommanderTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commander_terms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('commander_id');
            $table->date('appointed_date');
            $table->date('retirement_date')->nullable();
            $table->boolean('status')->default(true); // true for active, false for retired
            $table->foreign('commander_id')->references('id')->on('commanders')->onDelete('cascade');
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
        Schema::dropIfExists('commander_terms');
    }
}
