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
        self::createSkillCategoryTable();
        self::createSkillTable();
        self::createProjectTable();
        self::createUsageTable();
    }

    private function createSkillCategoryTable(): void
    {
        Schema::create('por_skill_category', function (Blueprint $table) {
            $table->string('skicat_code', 4);
            $table->string('skicat_label', 50);
            $table->primary('skicat_code');
        });
    }

    private function createSkillTable(): void
    {
        Schema::create('por_skill', function (Blueprint $table) {
            $table->id('ski_id');
            $table->string('ski_name', 50);
            $table->text('ski_description');

            $table->string('skicat_code', 4);
            $table->foreign('skicat_code')->references('skicat_code')->on('por_skill_category');
        });
    }

    private function createProjectTable(): void
    {
        Schema::create('por_project', function (Blueprint $table) {
            $table->id('pro_id');
            $table->string('pro_name', 50);
            $table->string('pro_github', 50);
            $table->string('pro_summary', 200);
            $table->text('pro_description');
            $table->string('pro_url', 50);
        });
    }

    private function createUsageTable(): void
    {
        Schema::create('por_usage', function (Blueprint $table) {
            $table->bigInteger('ski_id');
            $table->bigInteger('pro_id');
            $table->foreign('ski_id')->references('ski_id')->on('por_skill');
            $table->foreign('pro_id')->references('pro_id')->on('por_project');
            $table->primary(['ski_id', 'pro_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $createdTables = ['por_skill_category', 'por_skill', 'por_project', 'por_usage'];
        
        foreach ($createdTables as $table) {
            Schema::dropIfExists($table);
        }
    }
};
