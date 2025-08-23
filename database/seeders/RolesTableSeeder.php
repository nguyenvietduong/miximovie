<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'title' => 'Quản trị viên',
                'description' => 'Người quản lý hệ thống, có quyền cao nhất.',
            ],
            [
                'name' => 'user',
                'title' => 'Người mua',
                'description' => 'Khách hàng bình thường có thể duyệt, mua và đánh giá sản phẩm.',
            ],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role['name']], $role);
        }
    }
}