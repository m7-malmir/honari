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
        Schema::create('biographies', function (Blueprint $table) {
            $table->id();
            $table->string('full_name_fa');
            $table->string('full_name_en');
            $table->string('slug_fa')->unique();
            $table->string('slug_en')->unique();
            $table->date('birth_date')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('bio_fa')->nullable();
            $table->text('bio_en')->nullable();
            $table->string('website')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('telegram')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biographies');
    }
};
