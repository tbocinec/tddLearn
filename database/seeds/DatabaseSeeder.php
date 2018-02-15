<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleUserSeeder::class);
         $this->call(UserSeeder::class);

        $this->call(ProgramingLanguageSeeder::class);

        $this->call(Category_tasksSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(taskLevelSeeder::class);
        $this->call(TaskTestSeeder::class);

    }
}
