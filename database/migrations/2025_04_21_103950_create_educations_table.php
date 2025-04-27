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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('title_fa');          
            $table->string('title_en');          
            $table->text('description_fa')->nullable();
            $table->text('description_en')->nullable();
            $table->string('slug_fa')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('cover')->nullable(); // تصویر یا فایل شاخص  
            $table->string('video_url')->nullable(); // لینک ویدیو معرفی یا نمونه  
            $table->unsignedInteger('order')->default(1); // ترتیب نمایش
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('educations');
    }
};
