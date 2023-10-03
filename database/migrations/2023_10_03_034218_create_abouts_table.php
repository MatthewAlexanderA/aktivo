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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->text('about_desc');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('image_3');
            $table->string('story_title');
            $table->text('story_desc');
            $table->string('mission_title');
            $table->text('mission_desc');
            $table->string('core_title_1');
            $table->text('core_desc_1');
            $table->string('core_title_2');
            $table->text('core_desc_2');
            $table->string('core_title_3');
            $table->text('core_desc_3');
            $table->string('core_title_4');
            $table->text('core_desc_4');
            $table->string('core_title_5');
            $table->text('core_desc_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
