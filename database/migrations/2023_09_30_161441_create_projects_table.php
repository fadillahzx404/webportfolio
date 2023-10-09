<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->foreignId('category_project_id');
            $table->text('desc_project');
            $table->string('tools_project');
            $table->string('photo_cover');
            $table->string('photo_left');
            $table->string('photo_center');
            $table->string('photo_right');
            $table->string('link_project');
            $table->string('github_project');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
        Schema::dropIfExists('projects');
    }
};
