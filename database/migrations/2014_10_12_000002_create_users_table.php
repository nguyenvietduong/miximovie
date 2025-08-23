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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Thông tin cơ bản
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // Hồ sơ cá nhân
            $table->string('phone')->unique()->nullable(); // Số điện thoại
            $table->string('avatar')->nullable(); // Hình đại diện
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Giới tính
            $table->date('birthdate')->nullable(); // Ngày sinh (năm/tháng/ngày)

            // Quản lý đăng nhập & bảo mật
            $table->rememberToken();

            // Nâng cao cho web xem phim
            $table->integer('points')->default(0); // Điểm số tích lũy
            $table->enum('vip_level', ['none', 'bronze', 'silver', 'gold', 'diamond'])->default('none'); // mức độ VIP
            $table->enum('status', ['active', 'banned', 'suspended'])->default('active'); // trạng thái tài khoản

            // Xem phim cùng nhau
            $table->boolean('is_online')->default(false); // trạng thái online
            $table->timestamp('last_seen')->nullable(); // lần cuối hoạt động
            $table->string('current_room')->nullable(); // phòng đang xem chung (nếu có)

            // Quản lý quyền hạn
            $table->unsignedBigInteger('role_id')->default(2);
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            // Thời gian tạo và cập nhật
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
