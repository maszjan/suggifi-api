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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name")->nullable();
            $table->string("url")->nullable();
            $table->year("year")->nullable();
            $table->char('certificate')->nullable();
            $table->decimal("rating")->nullable();
            $table->string("votes")->nullable();
            $table->integer("votes_int")->nullable();
            $table->text("plot")->nullable();
            $table->boolean("action")->default(false);
            $table->boolean("adventure")->default(false);
            $table->boolean("comedy")->default(false);
            $table->boolean("crime")->default(false);
            $table->boolean("family")->default(false);
            $table->boolean("fantasy")->default(false);
            $table->boolean("mystery")->default(false);
            $table->boolean("scifi")->default(false);
            $table->boolean("thriller")->default(false);

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
