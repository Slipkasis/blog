<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'David Lopez',
            'email' => 'esdlopezl@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(2)->create();
    }
}
