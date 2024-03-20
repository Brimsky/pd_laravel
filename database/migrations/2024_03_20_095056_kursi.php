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
        Schema::create('kursses', function (Blueprint $table) {
            $table->id();
            $table->string('nosaukums');
            $table->text('pask_text');
            $table->string('banner_andress');
            $table->integer('cilv_sk_kursa');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kursses');
    }
};
