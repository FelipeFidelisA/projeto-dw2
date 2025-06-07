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
        Schema::table('receitas', function (Blueprint $table) {
            $table->boolean('is_recorrente')->default(false)->after('data_referencia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('receitas', function (Blueprint $table) {
            $table->dropColumn('is_recorrente');
        });
    }
};
