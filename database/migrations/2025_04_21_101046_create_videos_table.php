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
        Schema::create('videos', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // اطمینان
            $table->id();
            $table->string('title_fa');
            $table->string('title_en');
            $table->string('thumbnail')->nullable();
            $table->string('video_url')->nullable(); 
            $table->text('description_fa')->nullable();
            $table->text('description_en')->nullable();
        
            $table->unsignedBigInteger('category_id')->nullable();
        
            $table->timestamps();
        
            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
