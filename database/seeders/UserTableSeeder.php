<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // DB::table('users')->where('id', 1)->update([
        //     'name' => 'Admin',
        //     'email' => 'admin@email.com',
        //     'password' => Hash::make('123'),
        // ]);

        $user = User::create([
        	'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('123'),
        ]);

        $role = Role::create(['name' => 'Admin']);
        // $role = Role::create(['name' => 'Admin', 'name' => 'Customer']);
   
        $permissions = Permission::pluck('id','id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
        
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Admin',
        //         // 'username' => 'admin',
        //         'email' => 'admin@email.com',
        //         'password' => Hash::make('123'),
        //         // 'image' => $faker->image(public_path('uploads'), 200, 200),
        //         // 'role' => 'admin',
        //         // 'status' => 'active',
        //     ],
        //     [
        //         'name' => 'Vendor',
        //         // 'username' => 'vendor',
        //         'email' => 'vendor@email.com',
        //         'password' => Hash::make('123'),
        //         // 'role' => 'vendor',
        //         // 'status' => 'active',
        //     ],
        //     [
        //         'name' => 'Customer',
        //         // 'username' => 'customer',
        //         'email' => 'customer@email.com',
        //         'password' => Hash::make('123'),
        //         // 'role' => 'customer',
        //         // 'status' => 'active',
        //     ]
        // ]);
    }
}
