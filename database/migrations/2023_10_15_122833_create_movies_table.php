<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("names")->nullable();
            $table->string("date_x")->nullable();
            $table->decimal("score")->nullable();
            $table->string('genre')->nullable();
            $table->text("overview")->nullable();
            $table->text("crew")->nullable();
            $table->string("orig_title")->nullable();
            $table->string("status")->nullable();
            $table->string("orig_lang")->nullable();
            $table->bigInteger("budget_x")->nullable();
            $table->bigInteger("revenue")->nullable();
            $table->string("country")->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
