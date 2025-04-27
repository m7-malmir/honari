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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();   // پیام تکی به کاربر خاص. برای پیام عمومی خالی میمونه
            $table->string('type')->default('system');           // نوع پیام: notification, system, alert, etc.
            $table->string('title_fa')->nullable();              // عنوان پیام فارسی
            $table->string('title_en')->nullable();              // عنوان پیام انگلیسی
            $table->text('body_fa')->nullable();                 // متن پیام فارسی
            $table->text('body_en')->nullable();                 // متن پیام انگلیسی
            $table->string('action_url')->nullable();            // لینک اکشن (مثلاً برای کلیک روی نوتیف یا دیدن پیام)
            $table->boolean('is_read')->default(false);          // آیا کاربر پیام را خوانده؟
            $table->timestamp('sent_at')->nullable();            // زمان ارسال پیام
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
