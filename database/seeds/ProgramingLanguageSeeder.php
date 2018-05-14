<?php

use App\ProgramingLanguage;
use Illuminate\Database\Seeder;

class ProgramingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programing_languages')->truncate();


        \App\Language::create([
            'name' => 'Python',
            'compiler_url' => 'http://localhost:8080',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 1,
        ]);

        \App\Language::create([
            'name' => 'C++',
            'compiler_url' => 'http://localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 1,
        ]);

        \App\Language::create([
            'name' => 'Java',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);



        \App\Language::create([
            'name' => 'Javascript',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);

        \App\Language::create([
            'name' => 'Scala',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);

        \App\Language::create([
            'name' => 'Swift',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);

        \App\Language::create([
            'name' => 'Ruby',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);


        \App\Language::create([
            'name' => 'Go',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);

        \App\Language::create([
            'name' => 'PHP',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);

        \App\Language::create([
            'name' => 'C #',
            'compiler_url' => 'localhost:8081',
            'user' => 'tomas',
            'password' => 'tomas',
            'active' => 0,
        ]);



    }
}
