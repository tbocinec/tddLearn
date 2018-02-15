<?php

use App\CategoryTask;
use Illuminate\Database\Seeder;

class Category_tasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_tasks')->truncate();

        $faker = Faker\Factory::create();
        CategoryTask::create([
            'name' => 'Začiatočníci',
            'description' => $faker->text,
            'active' => 1
        ]);

        CategoryTask::create([
            'name' => 'Mierne pokročilý',
            'description' => $faker->text,
            'active' => 1
        ]);

        CategoryTask::create([
            'name' => 'Pokročilý',
            'description' => $faker->text,
            'active' => 1
        ]);

        CategoryTask::create([
            'name' => 'Zábavné',
            'description' => $faker->text,
            'active' => 1
        ]);

    }
}
