<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create(['email' => 'admin@test.com'])->assignRole(ROLE_ADMIN);
        User::factory()->create(['email' => 'seller@test.com'])->assignRole(ROLE_SELLER);
        User::factory()->create(['email' => 'user@test.com'])->assignRole(ROLE_USER);
    }
}
