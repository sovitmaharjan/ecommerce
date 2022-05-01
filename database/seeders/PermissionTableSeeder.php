<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'user-login-as',
            
            'account-request-list',
            'account-request-create',
            'account-request-edit',
            'account-request-delete',

            'category-list',
            'category-create',
            'category-edit',
            'category-delete',

            'attribute-list',
            'attribute-create',
            'attribute-edit',
            'attribute-delete',

            'brand-list',
            'brand-create',
            'brand-edit',
            'brand-delete',

            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            
            'order-list',
            'order-create',
            'order-edit',
            'order-delete',

            'profile-list',
            'profile-edit',

            'banner-list',
            'banner-create',
            'banner-edit',
            'banner-delete',

            'general-setting-list',
            'general-setting-create',
            'general-setting-edit',
            'general-setting-delete',

            'payment-list',
            'payment-create',
            'payment-edit',
            'payment-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
