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
        Schema::create('clusters', function (Blueprint $table) {
            $table->id('idCluster');
            $table->string('nom');
            $table->unsignedBigInteger('idFiliere');
            $table->foreign('idFiliere')->references('idFiliere')->on('filieres')->onDelete('cascade');
            $table->unsignedBigInteger('idVillage');
            $table->foreign('idVillage')->references('idVillage')->on('villages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clusters');
    }
};
