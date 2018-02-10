<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('tasks')->delete();



        DB::table('tasks')->insert([
            [
                'name' => 'Kalkulačka',
                'description' =>$faker->text(),
                'programingLanguage_id'  => 1,
                'categoryTask_id'=>1,
                'active' =>1
            ],

        ]);
    }
}
