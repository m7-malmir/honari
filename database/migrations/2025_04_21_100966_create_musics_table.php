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
        Schema::create('musics', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // تنظیم موتور دیتابیس برای پشتیبانی از ارتباطات
            $table->id();
            $table->string('title_fa'); // عنوان فارسی موسیقی
            $table->string('title_en'); // عنوان انگلیسی موسیقی
            $table->text('description_fa')->nullable(); // توضیحات فارسی موسیقی
            $table->text('description_en')->nullable(); // توضیحات انگلیسی موسیقی
            $table->string('artist')->nullable(); // نام هنرمند
            $table->string('cover')->nullable(); // تصویر یا کاور موسیقی
            $table->string('file')->nullable(); // فایل موزیک (mp3 یا هر فرمت دیگر)
            $table->unsignedBigInteger('category_id')->nullable(); // دسته‌بندی
            $table->timestamps();
        
            // تنظیم ارتباط با جدول دسته‌بندی‌ها
            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('musics');
    }
};
