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
        Schema::create('Giao_vien', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('ho_ten',50);
            $table->date('ngay_sinh');
            $table->boolean('gioi_tinh')->default(0);
            $table->string('sdt');
            $table->string('mon_hoc',30);
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
        Schema::dropIfExists('Giao_vien');
    }
};
