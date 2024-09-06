<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

        public function up()
{
    Schema::table('immeubles', function (Blueprint $table) {
        $table->integer('rooms')->nullable();
        $table->integer('toilets')->nullable();
        $table->boolean('air_conditioning')->default(false);
        $table->boolean('heating')->default(false);
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('immeubles', function (Blueprint $table) {
            //
        });
    }
};
