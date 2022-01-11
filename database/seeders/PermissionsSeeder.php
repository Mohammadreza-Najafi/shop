<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

    //     // create permissions

       $permission1= Permission::create(['name' => 'create product']);
       $permission2= Permission::create(['name' => 'edit product']);
       $permission3= Permission::create(['name' => 'delete product']);

       $permission4= Permission::create(['name' => 'create user']);
       $permission5= Permission::create(['name' => 'edit user']);
       $permission6= Permission::create(['name' => 'delete user']);

       $permission7= Permission::create(['name' => 'create shopkeeper']);
       $permission8= Permission::create(['name' => 'edit shopkeeper']);
       $permission9= Permission::create(['name' => 'delete shopkeeper']);

       $permission10= Permission::create(['name' => 'create writer']);
       $permission11= Permission::create(['name' => 'edit writer']);
       $permission12= Permission::create(['name' => 'delete writer']);

    //     // create roles and assign existing permissions
        
        $admin = Role::create(['name' => 'Admin']);  
        $admin->givePermissionTo([
            $permission1,
            $permission2,
            $permission3,
            $permission4,
            $permission5,
            $permission6,
            $permission7,
            $permission8,
            $permission9,
            $permission10,
            $permission11,
            $permission12
        ]);


        $shopkeeper = Role::create(['name' => 'Shopkeeper']);
        $shopkeeper->givePermissionTo([
            $permission1,
            $permission2,
            $permission3
        ]);

        $writer = Role::create(['name' => 'Writer']);
        $writer->givePermissionTo([
            $permission2
         ]);
 

        Role::create(['name' => 'User']);



//        // create demo users

    //    $user = \App\Models\User::factory()->create([
    //        'name' => 'Example User1',
    //        "phone_number"=>"",
    //        'email' => 'test@example.com',
    //        "password"=>"12345"

    //    ]);
        
    //    $user = \App\Models\User::find(1);
    //    $user->assignRole($admin);

    //    $user = \App\Models\User::find(2);
    //    $user->assignRole($admin);

    //    $user = \App\Models\User::find(3);
    //    $user->assignRole($admin);

    //    $user = \App\Models\User::factory()->create([
    //     'name' => 'Example User2',
    //     "phone_number"=>"",
    //     'email' => 'test@example.com',
    //     "password"=>"12345"
    // ]);

    // $user->assignRole($shopkeeper);

    // $user = \App\Models\User::factory()->create([
    //     'name' => 'Example User3',
    //     "phone_number"=>"",
    //     'email' => 'test@example.com',
    //     "password"=>"12345"
    // ]);

    // $user->assignRole($writer);


    }
}
