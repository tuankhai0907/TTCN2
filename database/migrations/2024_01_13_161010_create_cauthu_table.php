<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauthuTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    // Kiểm tra nếu bảng 'cauthu' chưa tồn tại
    if (!Schema::hasTable('cauthu')) {
        Schema::create('cauthu', function (Blueprint $table) {
            $table->id();
            $table->string('tencauthu');
            $stable->string('hinhanh');
            $table->integer('tuoi');
            $table->string('vitri');
            $table->string('thanhtich');
            $table->string('clb');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cauthu');
    }
}