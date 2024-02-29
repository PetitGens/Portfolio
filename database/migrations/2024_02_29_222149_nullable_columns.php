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
        Schema::table('por_skill', function (Blueprint $table) {
            $table->string('skicat_code', 4)->nullable()->change();
        });

        Schema::table('por_project', function (Blueprint $table) {
            $table->string('pro_github', 50)->nullable()->change();
            $table->string('pro_url', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('por_skill', function (Blueprint $table) {
            $table->string('skicat_code', 4)->nullable(false)->change();
        });

        Schema::table('por_project', function (Blueprint $table) {
            $table->string('pro_github', 50)->nullable(false)->change();
            $table->string('pro_url', 50)->nullable(false)->change();
        });
    }
};
