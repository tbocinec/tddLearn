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


        ProgramingLanguage::create([
            'name' => 'Python',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => 'Java',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => 'C++',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => 'Javascript',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => 'Scala',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => 'Swift',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => 'Ruby',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);


        ProgramingLanguage::create([
            'name' => 'Go',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => 'PHP',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);

        ProgramingLanguage::create([
            'name' => ' #',
            'compiler_url' => 'localhost:8081',
            'active' => 1,
        ]);



    }
}
