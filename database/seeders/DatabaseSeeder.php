<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $users=\App\Models\User::factory(2)->create();

        $users=User::all();

        $users->each(function ($user){
            $user->userAddress()->save(UserAddress::factory()->make());
        });

    }
}
