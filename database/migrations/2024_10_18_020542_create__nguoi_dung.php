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
        Schema::create('Nguoi_dung', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dang_nhap',16)->unique();
            $table->string('mat_khau',16);
            $table->string('vai_tro',10);
            $table->string('nguoi_tao',50);
            $table->string('nguoi_cap_nhat',50);
            $table->timestamp('ngay_tao') ->useCurrent();
            $table->timestamp('ngay_cap_nhat') -> useCurrent();
            $table->integer('trang_thai')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Nguoi_dung');
    }
};
