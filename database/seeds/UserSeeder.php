<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $faker = Faker::create();
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.sk',
            'password' => bcrypt('heslo'),
            'is_active' => 1,
            'role_id' =>1,
        ]);

        User::create([
            'name' => 'Tomáš Bočinec',
            'email' => 't.bocinec@gmail.com',
            'password' => bcrypt('heslo'),
            'is_active' => 1,
            'role_id' =>1,
        ]);

        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('heslo'),
                'is_active' => 1,
                'role_id' =>3,
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'name' =>  $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('heslo'),
                'is_active' => 1,
                'role_id' =>2,
            ]);
        }

    }
}
