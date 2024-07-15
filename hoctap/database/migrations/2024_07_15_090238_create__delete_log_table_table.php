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
     Schema::dropIfExists('log');
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('_delete_log_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content_log');
            $table->timestamps();
        });
    }
};