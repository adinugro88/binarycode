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
        Schema::create('cdpoints', function (Blueprint $table) {
            $table->id();
            $table->integer("score");
            $table->string("detail");
            $table->bigInteger('cards_id')->unsigned()->index()->nullable();
            $table->foreign('cards_id')->references('id')->on('cards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdpoints');
    }
};
