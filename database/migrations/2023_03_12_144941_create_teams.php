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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name1');
            $table->string('desi1');
            $table->string('img1');
            $table->string('name2');
            $table->string('desi2');
            $table->string('img2');
            $table->string('name3');
            $table->string('desi3');
            $table->string('img3');
            $table->string('sicon');
            $table->string('slink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
