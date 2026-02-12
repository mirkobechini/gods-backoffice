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
        Schema::table('gods', function (Blueprint $table) {
            $table->foreignId('pantheon_id')->nullable()->constrained()->after('rank')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gods', function (Blueprint $table) {
            $table->dropForeign('gods_pantheon_id_foreign');
            $table->dropColumn('pantheon_id');
        });
    }
};
